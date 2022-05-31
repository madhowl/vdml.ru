<?php

namespace App\Http\Livewire;

use App\Mail\RequestPrice;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;


class Modal extends Component
{
    public $data;
    public $show;

    public $name;
    public $telefon;
    public $email;
    public $sendMessage;



    protected $rules = [
        'name' => 'required|min:6',
        'telefon' => 'required',
        'email' => 'required|email',
        'sendMessage' => 'required|min:10',
    ];
    protected $messages = [
        'name.required' => 'Имя не может быть пустым.',
        'name.min' => 'Имя не может быть меньше 6 символов.',
        'telefon.required' => 'Телефон не может быть пустым.',
        'sendMessage.required' => 'Телефон не может быть пустым.',
        'sendMessage.min' => 'Имя не может быть меньше 10 символов.',
        'email.required' => 'Email не может быть пустым.',
        'email.email' => 'Email введен не верно.',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $listeners = ['showModal' => 'showModal'];

    public function mount($data = 'ololo') {
        $this->data = $data;
        $this->show = false;
    }

    public function showModal($data) {
        $this->data = $data;

        $this->doShow();
    }

    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }

    public function doSomething() {
        // Do Something With Your Modal
        $this->validate();
        $comment = 'Это сообщение отправлено из формы обратной связи отправителем по имени '.$this->name;
        $toEmail = "aleks.gromykin.02@mail.ru";
        Mail::to($toEmail)->send(new RequestPrice($comment));
        //return 'Сообщение отправлено на адрес '. $toEmail;


        // Close Modal After Logic
        $this->doClose();
    }
    public function render()
    {
        return view('livewire.modal');
    }
}
