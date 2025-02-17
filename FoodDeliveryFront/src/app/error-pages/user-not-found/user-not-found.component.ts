import { Component } from '@angular/core';
import { Router } from '@angular/router'
import { CookieService } from 'ngx-cookie-service';
@Component({
  selector: 'app-user-not-found',
  templateUrl: './user-not-found.component.html',
  styleUrl: './user-not-found.component.css'
})
export class UserNotFoundComponent {
  constructor(
    public router:Router,
    public cookie: CookieService
  ){

  }
}
