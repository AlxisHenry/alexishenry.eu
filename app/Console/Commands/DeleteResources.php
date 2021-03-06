<?php

namespace App\Console\Commands;

use App\Models\Board;
use Illuminate\Console\Command;

class DeleteResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:resources {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a resource by specifying an id';

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle()
    {

        $board_to_delete= Board::find($this->argument()['id']);

        if(!$board_to_delete){
            echo "\n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\e[1;41m      The specified id does not exist      \e[0m \n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\n";
            return false;
        }

        $board_to_delete->delete();

        echo "\n";
        echo "\e[1;42m                                                         \e[0m\n";
        echo "\e[1;42m    An element from App\Models\Resources was deleted.    \e[0m\n";
        echo "\e[1;42m                                                         \e[0m\n";
        echo "\n";
        echo "\e[1;33m  Element #".$this->argument()['id']." was deleted from Resources\e[0m\n ";
        echo "\n";

        return true;

    }
}
