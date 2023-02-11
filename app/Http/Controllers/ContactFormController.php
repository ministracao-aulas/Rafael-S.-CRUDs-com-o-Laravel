<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * function contactForm
     *
     * @param Request $request
     * @return Illuminate\View\View
     */
    public function contactForm(Request $request): View
    {
        return view('contact-forms.contact-form', [
            'request' => $request,
        ]);
    }

    /**
     * function contactFormReceiver
     *
     * @param Request $request
     * @return
     */
    public function contactFormReceiver(Request $request)
    {
        Mail::to('ssdsd@dghgh.com')
            ->send(new ContactForm(
                name: $request->input('name'),
                email: $request->input('email'),
                messageContent: $request->input('messageContent'),
            ));

        // return \redirect()->route('xyuyu')->with('success', 'Mensagem enviada!'); //Ideal
        // return \view('xyz'); // Não é recomendado...
        return 'Mensagem enviada!'; // Não é recomendado...
    }

    /**
     * function feedbackForm
     *
     * @param Request $request
     * @return Illuminate\View\View
     */
    public function feedbackForm(Request $request): View
    {
        // TODO
        return view('view-com-formulario-de-feedback', [
            'request' => $request,
        ]);
    }

    /**
     * function feedbackFormReceiver
     *
     * @param Request $request
     * @return
     */
    public function feedbackFormReceiver(Request $request)
    {
        // TODO
        Mail::to('ssdsd@dghgh.com')
            ->send(new ContactForm(
                messageContent: $request->input('messageContent'),
            ));

        // return \redirect()->route('xyuyu')->with('success', 'Mensagem enviada!'); //Ideal
        // return \view('xyz'); // Não é recomendado...
        return 'Mensagem enviada!'; // Não é recomendado...
    }
}
