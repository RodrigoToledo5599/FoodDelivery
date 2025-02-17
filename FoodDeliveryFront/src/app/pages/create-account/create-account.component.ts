import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-create-account',
  templateUrl: './create-account.component.html',
  styleUrl: './create-account.component.css'
})
export class CreateAccountComponent implements OnInit{

  formulario!: FormGroup;
  constructor(
    private formBuilder : FormBuilder,
  ){}

  ngOnInit(): void {
    this.formulario = this.formBuilder.group({
      conteudo: ['Formulario Reativo'],
      autoria: [''],
      modelo: ['modelo1']
    })
  }

}
