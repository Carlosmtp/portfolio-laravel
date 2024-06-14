<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Crear la instancia del mailable y enviar el correo
        try {
            $correo = new ContactoMailable(
                $request->input('nombre'),
                $request->input('email'),
                $request->input('mensaje')
            );

            Mail::to('carlos.mauricio.tovar@correounivalle.edu.co')->send($correo);

            return response()->json(['success' => true, 'message' => 'Correo enviado correctamente.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error al enviar el correo.']);
        }
    }
}
