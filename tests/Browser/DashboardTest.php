<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class DashboardTest extends DuskTestCase
{
    /**
     * Test de connexion et accès au tableau de bord.
     *
     * @return void
     */
    public function testAdminLogin()
    {
        $user = User::where('email', 'admin@example.com')->first();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')  // Remplacez par le mot de passe correct
                    ->press('Login')
                    ->assertPathIs('/dashboard')  // Vérifie que l'utilisateur est redirigé vers le tableau de bord
                    ->assertSee('Dashboard');  // Vérifie que le texte 'Dashboard' est visible sur la page
        });
    }
}
