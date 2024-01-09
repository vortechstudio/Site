<?php

namespace App\Livewire\Template;

use Illuminate\Support\Collection;
use Livewire\Component;

class Header extends Component
{
    public Collection $menu;

    public function mount()
    {
        $this->menu = collect();
        $this->menu->push([
            "name" => "Acceuil",
            "route" => "home",
            "icon" => "fa-solid fa-home",
            "visible" => true
        ])->push([
            "name" => "Actualités",
            "route" => "news",
            "icon" => "fa-solid fa-newspaper",
            "visible" => true
        ])->push([
            "name" => "Produits",
            "route" => "products",
            "icon" => "fa-solid fa-gamepad",
            "visible" => true
        ])->push([
            "name" => "A Propos",
            "route" => "about",
            "icon" => "fa-solid fa-info-circle",
            "visible" => true
        ])->push([
            "name" => "Accès Rapide",
            "route" => "#",
            "icon" => "fa-solid fa-ellipsis",
            "visible" => false,
            "childrens" => [
                [
                    "name" => "Mon Compte",
                    "route" => "account",
                    "icon" => "fa-solid fa-user",
                    "visible" => true
                ],
                [
                    "name" => "Vortech LAB",
                    "route" => "vortechlab",
                    "icon" => "fa-solid fa-flask",
                    "visible" => true
                ],
                [
                    "name" => "Wiki Store",
                    "route" => "wikistore",
                    "icon" => "fa-brands fa-wikipedia-w",
                    "visible" => true
                ]
            ]
        ]);
    }
    public function render()
    {
        return view('livewire.template.header');
    }
}
