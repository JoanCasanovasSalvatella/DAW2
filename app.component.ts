import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'El meu primer Slider';

  // Array que contiene los enlaces a las diferentes imagenes
  urlImage = [
  'https://picsum.photos/id/30/300/200', 
  'https://picsum.photos/id/31/300/200', 
  'https://picsum.photos/id/32/300/200',
  'https://picsum.photos/id/33/300/200',
  'https://picsum.photos/id/34/300/200',
  'https://picsum.photos/id/35/300/200',
  'https://picsum.photos/id/36/300/200',
  'https://picsum.photos/id/37/300/200',
  'https://picsum.photos/id/38/300/200',
  'https://picsum.photos/id/39/300/200'];
  botonApagado = false;

  clickNext(){
    var indice = this.urlImage[0]; //Variable que almacena el indice actual

    // Bucle for para recorrer todas las imagenes
    for(var i = 0; i < this.urlImage.length - 1; i++){
      this.urlImage[i] = this.urlImage[i + 1]; // Avanzar una posicion
    }

    this.urlImage[this.urlImage.length - 1] = indice;
  }

  clickBefore(){
    var indice = this.urlImage[this.urlImage.length -1]; //Variable que almacena el indice actual

    // Bucle for para recorrer todas las imagenes
    for(var i = this.urlImage.length - 1; i > 0; i--) {
      this.urlImage[i] = this.urlImage[i - 1]; // Retroceder una posicion
    }

    this.urlImage[0] = indice;
  }

}
