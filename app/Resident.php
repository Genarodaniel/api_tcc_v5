<?php
   
   namespace App;
   

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\Resident as Authenticatable;

     class Resident extends User{

        protected $fillable = [
            'residency_number','residency_code','document'
        ];

    }

    ?>