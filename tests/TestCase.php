<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost:8080';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function logMeIn()
    {
        $this->visit('/')
            ->type('bertrand.kintanar@gmail.com', 'email')
             ->type('retardko', 'password')
             ->press('Login')
             ->see('Dashboard')
             ->onPage('dashboard');
    }
}
