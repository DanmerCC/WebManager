<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Symfony\Component\Process\Process;

class RunScript extends Component
{
    public $output = '';

    public function runScript()
    {
        $process = new Process(['ls', '/etc']);
        $process->setTimeout(null);

        // Ejecutar el proceso y actualizar el output en tiempo real
        $process->run(function ($type, $buffer) {
            $this->output .= $buffer;
            $this->emit('outputUpdated', $this->output);
        });
    }

    public function render()
    {
        return view('livewire.run-script');
    }
}
