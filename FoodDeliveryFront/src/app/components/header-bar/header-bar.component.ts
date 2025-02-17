import { Component, OnInit } from '@angular/core';
import { LocalStorageService } from '../../services/local-storage.service';

@Component({
  selector: 'app-header-bar',
  templateUrl: './header-bar.component.html',
  styleUrl: './header-bar.component.css'
})
export class HeaderBarComponent implements OnInit{

  public pedidofeito : boolean = false;
  constructor(
    private LSS : LocalStorageService,
  ){}

  ngOnInit(){
    this.pedidofeito = this.LSS.CheckPedidoFeito();
    console.log(this.pedidofeito);
  }


}
