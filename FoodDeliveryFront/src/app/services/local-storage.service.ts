import { Injectable } from '@angular/core';
import { Prato } from './../interfaces/interfaces';
@Injectable({
  providedIn: 'root'
})
export class LocalStorageService {
  
  private pedidokey: string = "pedido";
  private precopedidokey: string = "precopedido";
  private pedidofeitokey: string = "pedidofeito"; // true/false ou 1/0
  

  constructor() { }

  SetPedidoFeito(feito : boolean){ // Usar quando o pedido feito ou concluido
    if(feito == true){
      localStorage.setItem(this.pedidofeitokey, "1")
    }
    else if(feito == false){
      localStorage.setItem(this.pedidofeitokey, "0")
    }
  }

  CheckPedidoFeito() : boolean{
    return localStorage.getItem(this.pedidofeitokey)  == "1" ? true : false;
  }

  AdicionarASacola(item: Prato): void {
    let pratos: Prato[] = [];
    pratos = JSON.parse(localStorage.getItem(this.pedidokey)!) == null ? [] : JSON.parse(localStorage.getItem(this.pedidokey)!);
    console.log(pratos);
    pratos.push(item);
    localStorage.setItem(this.pedidokey, JSON.stringify(pratos));
    console.log("prato adicionado");
  }

  GetPedido(): Prato[] {
    const storedItems = localStorage.getItem(this.pedidokey);
    return JSON.parse(storedItems!);
  }
  
  StorePrecoPedido(preco : string){
    localStorage.setItem(this.precopedidokey,preco);
  }

  PedidoConfirmado(){
    // ainda estou pensando
  }

  PedidoEntregue(){

  }

  PedidoCancelado(){

  }

  removeAll() {
    return localStorage.clear();
  }


}
