import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { CookieService } from 'ngx-cookie-service';
import { ToastrModule } from 'ngx-toastr';
import { LocalStorageService } from './services/local-storage.service';



import { RouterModule } from '@angular/router'
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginCardComponent } from './components/login-card/login-card.component';
import { HomeComponent } from './pages/home/home.component';
import { PratoComponent } from './pages/prato/prato.component';
import { HeaderBarComponent } from './components/header-bar/header-bar.component';
import { HomeService } from './pages/home/home.services';
import { UserNotFoundComponent } from './error-pages/user-not-found/user-not-found.component';
import { PratoServices } from './pages/prato/prato.services';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgxSpinnerModule } from 'ngx-spinner';
import { timeout } from 'rxjs';
import { CreateAccountComponent } from './pages/create-account/create-account.component';
import { ConfirmarPedidoComponent } from './pages/confirmar-pedido/confirmar-pedido.component';
import { StatusPedidoComponent } from './pages/status-pedido/status-pedido.component';


@NgModule({
  declarations: [
    AppComponent,
    LoginCardComponent,
    HomeComponent,
    PratoComponent,
    HeaderBarComponent,
    UserNotFoundComponent,
    CreateAccountComponent,
    ConfirmarPedidoComponent,
    StatusPedidoComponent,

    ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    AppRoutingModule,
    HttpClientModule,
    RouterModule,
    BrowserAnimationsModule,
    NgxSpinnerModule,
    ToastrModule.forRoot({
      timeOut: 3000,
      positionClass: 'toast-top-right',
      preventDuplicates: true
    }),
  
  ],
  providers: [
    CookieService,
    HomeService,
    PratoServices,
    LocalStorageService,
    
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
