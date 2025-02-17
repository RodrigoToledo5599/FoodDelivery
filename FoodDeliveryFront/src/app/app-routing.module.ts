import { createComponent, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './pages/home/home.component';
import { AppComponent } from './app.component';
import { PratoComponent } from './pages/prato/prato.component';
import { LoginCardComponent } from './components/login-card/login-card.component';
import { CreateAccountComponent } from './pages/create-account/create-account.component'
import { UserNotFoundComponent } from './error-pages/user-not-found/user-not-found.component';
import { ConfirmarPedidoComponent } from './pages/confirmar-pedido/confirmar-pedido.component';
import { StatusPedidoComponent } from './pages/status-pedido/status-pedido.component';


const routes: Routes = [

  { path: '', component: LoginCardComponent },
  { path: 'prato/:pratoId', component: PratoComponent },
  { path: 'home', component: HomeComponent },
  { path: 'create_account', component: CreateAccountComponent },
  { path: 'user_not_found', component: UserNotFoundComponent },
  { path: 'confirmar_pedido', component: ConfirmarPedidoComponent },
  { path: 'status_pedido' , component: StatusPedidoComponent },






];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
