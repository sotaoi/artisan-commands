<?php namespace Sotaoi\ArtisanCommands;

use Illuminate\Console\Command;

class RoutesCommand extends Command {
    protected $signature = 'sotaoi:routes';

    public function handle(): void {
        echo json_encode(['uris' => RoutesRoutines::getRoutes()]);
    }
}
