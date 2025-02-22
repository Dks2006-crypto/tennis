<?php

namespace App\Livewire;

use App\Jobs\SendMessage;
use Livewire\Component;


class ContactForm extends Component
{
    public $surname;
    public $name;
    public $fathername;
    public $phoneNumber;
    public $email;
    public $message;

    protected $rules = [
        "surname" => 'required|min:3',
        "name" => 'required|min:3',
        "fathername" => 'max:120',
        "phoneNumber" => 'required|min:9|max:12',
        "email" => 'required|min:3',
        "message" => 'required|min:12',
    ];
    protected $messages = [
        'surname.required' => 'Поле "Имя" обязательно для заполнения',
        'surname.min' => 'Поле "Имя" должно содержать больше 2 символов',
        'name.required' => 'Поле "Название дрона" обязательно для заполнения',
        'name.min' => 'Поле "Название дрона" должно содержать больше 2 символов',
        'fathername' => 'Поле "отчество" должно содержать меньше 120 символов',
        'phoneNumber.required' => 'Поле "Номер телефона" обязательно для заполнения',
        'phoneNumber.min' => 'Поле "Номер телефона" должно иметь больше 9 символов',
        'phoneNumber.max' => 'Поле "Номер телефона" должно иметь меньше 12 символов',
        'email.required' => 'Поле "Почта" обязательно для заполнения',
        'email.min' => 'Поле "Почта" должно иметь больше 3 символов',
        'message.required' => 'Поле "Сообщение" обязательно для заполнения',
        'message.min' => 'Поле "Сообщение" должно содержать больше 12 символов',

    ];
    public function submit()
    {
        $this->validate();
        $this->reset(['surname', 'name']);
        dispatch(new SendMessage(
        $this->surname,
        $this->name,
        $this->fathername,
        $this->phoneNumber,
        $this->email,
        $this->message,
        ))->handle();
        session()->flash('message', 'Дрон успешно отправлен');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
