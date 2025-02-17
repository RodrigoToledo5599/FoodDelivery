import { Component, OnInit } from '@angular/core';
import { LocalStorageService } from '../../services/local-storage.service';
import { Prato } from './../../interfaces/interfaces';
import { Router } from '@angular/router';

@Component({
  selector: 'app-confirmar-pedido',
  templateUrl: './confirmar-pedido.component.html',
  styleUrl: './confirmar-pedido.component.css'
})

export class ConfirmarPedidoComponent implements OnInit {
  
  pedido : Prato[] = [];
  precoTotal : number = 0;
  constructor(
    private LSS : LocalStorageService,
    private router : Router,
  ){}
  ngOnInit(){
    this.pedido = this.LSS.GetPedido();
    for(let element of this.pedido){
      this.precoTotal += Number(element.price);
    }
    let precoString = this.precoTotal.toFixed(2);
    this.precoTotal = Number(precoString);
    this.LSS.StorePrecoPedido(precoString);
  }

  ConcluirPedido(){
    this.LSS.SetPedidoFeito(true);
    return this.router.navigate(['/status_pedido']);
  }


}
