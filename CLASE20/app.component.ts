import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'clase02';
  // funciones, variables, etc
  //TypeScript -> tipado 
  nombre : string = "Franco";
  edad : number = 24; 
  decision : boolean = false; 
  mail : any = "dileo.francoj@gmail.com";
  numero : number = 0;
  lenguajes : string [] = ['PHP','HTML','CSS','ANGULAR'];
  edad2 : number = 27;
  cursada : any [] = [
    {nombre : 'franco',edad:24,mail:'dileo.francoj@gmail.com'},
    {nombre:'Matias',edad:32,mail:'matipiola@gmail.com'}
  ];
  
  // primer funcion en angular

  esMayor() {
    
    if(this.edad > 18) {
      return "El pibito es mayor de edad";
    }
  }

  contarNumero() {
    return this.numero++;

// badge
    }
  }
  // Visual studio : Typescript Microsoft (VisualStudio)

