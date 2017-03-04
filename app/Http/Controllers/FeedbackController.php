<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function send_mail(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "\n";
        
        try {
            Mail::raw($message, function ($mail) use ($name, $telephone ) {
                //$mail->from(env('MAIL_USERNAME'), $name );
                $mail->from('tester@ginnova.kz', 'Заявка' );
                $mail->to('em@ginnova.kz');
                $mail->to('tester@ginnova.kz');
            });
            //return back()->with('status', $firstname . trans('messages.feedback_success') );
            Session::flash('message', "Отправлено");
            return redirect('/');
        }
        catch (\Throwable $t) {
            //return back()->with('status', $firstname . trans('messages.feedback_error') );
        }
    }

    public function send_calc(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;

        $model = $request->model;
        $size = $request->size;
        $quantity = $request->quantity;
        $price = $request->price;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "Телефон: " . $telephone;
        $message .= "\n";
        $message .= "Модель: " . $model;
        $message .= "\n";
        $message .= "Размер: " . $size;
        $message .= "\n";
        $message .= "Количество: " . $quantity;
        $message .= "\n";
        $message .= "Цена: " . $price;
        $message .= "\n";
        try {
            Mail::raw($message, function ($mail) use ($name, $telephone, $model, $size, $quantity, $price ) {
                //$mail->from(env('MAIL_USERNAME'), $name );
                $mail->from('tester@ginnova.kz', 'Заявка' );
                $mail->to('em@ginnova.kz');
                $mail->to('tester@ginnova.kz');
            });
            //return back()->with('status', $firstname . trans('messages.feedback_success') );
            Session::flash('message', "Отправлено");
            return redirect('/');
        }
        catch (\Throwable $t) {
            //return back()->with('status', $firstname . trans('messages.feedback_error') );
        }
    }

    public function send_contacts(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        $text = $request->text;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "Сообщение: " . $text;
        $message .= "\n";
        
        try {
            Mail::raw($message, function ($mail) use ($name, $telephone, $text ) {
                //$mail->from(env('MAIL_USERNAME'), $name );
                $mail->from('tester@ginnova.kz', 'Заявка' );
                $mail->to('em@ginnova.kz');
                $mail->to('tester@ginnova.kz');
            });
            //return back()->with('status', $firstname . trans('messages.feedback_success') );
            Session::flash('message', "Отправлено");
            return redirect('/');
        }
        catch (\Throwable $t) {
            //return back()->with('status', $firstname . trans('messages.feedback_error') );
        }
    }
}
