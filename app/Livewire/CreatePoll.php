<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{

    public $title;
    public $options = ['First'];

    protected $rules = [
        'title' => 'required|min:3|max|:255',
        // every item in the array below marked as *.
        'options.*' => 'required|min:1|max:255',
        'options' => 'required|array|min:1|max:10',
        // these are the validation rules  $this->validate();  in the  public function createPoll()
    ];

    protected $messages = [
        'options.*.' => 'The opció (NO) lehet empty (hunglish skills)',
    ];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    public function updated($propertyName)
{
        $this->validateOnly($propertyName);
}


    public function createPoll()
    {
        $this->validate();
        // $poll = Poll::create([ this changed to Poll::create([
            Poll::create([
                'title' => $this->title
                ])->options()->createMany(
                    collect($this->options)
                        ->map(fn($option) => ['name' => $option])
                        ->all()
                );

            //    $Poll = Poll::create([
            //         'title' => $this->title
            //    ]);

        // ↓↓↓ this fragment replaces the down below commented out!! ↓↓↓

        // foreach ($this->options as $optionName) {
        //     $poll->options()->create(['name' => $optionName ]);
        // }

        $this->reset(['title', 'options']);
    }



    // public function mount(){

    // }
}
