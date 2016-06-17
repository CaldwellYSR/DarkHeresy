<?php

namespace App\Http\Controllers;

use App\Character;
use App\Characteristic;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class CharacterController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function show(Request $request, Character $character) {
        $character->load('characteristics', 'user');
        return view('character.index')->with('character', $character);
    }

    public function edit(Request $request, Character $character) {
        if ($request->user()->cannot('edit-character', $character)) {
            abort(403);
        }
        return view('character.edit')->with('character', $character);
    }

    public function newCharacter(Request $request) {
        return view('character.new');
    }

    public function createCharacter(Request $request) {

        $character = new Character();
        $character->name = $request->input('name');
        $character->user_id = $request->user()->id;
        $character->player_name = $request->user()->name;
        $character->save();
        $characteristics = $this->getDefaultCharacteristics($character->id);
        $character->characteristics()->saveMany($characteristics);

        return redirect('/home');

    }

    private function getDefaultCharacteristics($id) {
        return [
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Weapon Skill", 
                    "description" => "Weapon Skill measuress a character's competence in all forms of close-quarters combat. Characters with high Weapon Skill values are excellent warriors, renowned with a chainsword or even their bare hands."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Ballistic Skill", 
                    "description" => "Ballistic Skill measures a character's accuracy with all forms of ranged weapons. A high Ballistic Skill indicates a character is an excellent marksman, someone to be rightly feared in a fire-fight or shootout."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Strength", 
                    "description" => "Strength measures a character's muscles and physical power. A high Strength charactistic value allows a character to lift heavier objects and punch a foe harder."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Toughness", 
                    "description" => "Toughness measures a character's health, stamina, and resistance. Exceptionally Tough characters can shrug off otherwise damaging weapon hits and better withstand poisonous attacks."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Agility", 
                    "description" => "This measures a character's quickness, reflex, and poise. High Agility can allow a character to manipulate delicate machinery with finesse, or keep his footing when crossing treacherous terrain. This characteristic also determines a character's movement rate; the higher the Agility bonus, the farther he can move each turn."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Intelligence", 
                    "description" => "Intelligence measures a character's acumen, reason, and general knowledge. A character with strong Intelligence value can recall huge volumes of data, correlate esoteric clues, or determine if an ancient archaeotech relic is genuine or not."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Perception", 
                    "description" => "This measures a character's awareness and the acuteness of his senses. A character who has a high Perception value can pick out a stray bolter shell casing left amidst an underhive morass, or tell when someone is being deceitful."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Willpower", 
                    "description" => "Willpower measures a character's mental strength and resilience. High Willpower allows a character to exert control over a crowd of near-rioting hab workers or interrogate a captured heretic. It is also often used when wielding and resisting psychic powers."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Fellowship", 
                    "description" => "Fellowship measures a character's persuasiveness, ability to lead, and force of personality. Having a strong Fellowship makes for a character who can ingratiate himself into a gathering of suspicious forge menials or make skilled trades with wily vendors."
            ]),
            new Characteristic([
                    "character_id" => $id, 
                    "name" => "Influence", 
                    "description" => "This measures a character's connections, reputation, and resources. High INfluence can allow a character to quickly summon the aid of local military forces to his side, or arrange for fast transit to another star system. Ulike the other characteristics, Influence changes only as a character performs actions: it would decrease should he fail a mission in a highly visible manner, for example, or increase after he successfully rescues a kidnapped planetary governor."
            ])
        ];
    }

}
