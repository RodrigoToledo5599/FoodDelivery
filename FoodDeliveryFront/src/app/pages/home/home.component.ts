import { HomeService } from './home.services';
import { Component , OnInit } from '@angular/core';
import { CookieService } from 'ngx-cookie-service';
import { Prato } from './../../interfaces/interfaces';
import { Router } from '@angular/router'
// import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgxSpinnerService } from 'ngx-spinner';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})

export class HomeComponent implements OnInit {
  pratosList: Prato[] = [];
  constructor(
    private cookie: CookieService,
    private homeService: HomeService,
    private router: Router,
    private spinner: NgxSpinnerService,
  ){}

  LoadSpinner(){
    this.spinner.show();
  }

  ngOnInit(){
    if(this.cookie.get('access_token') == "" || this.cookie.get('access_token') == null){
      return this.router.navigate(['/user_not_found']);
    }
    return this.homeService.loadHomePage(this.cookie.get('access_token'))
      .subscribe(
        (Pratos:Prato[]) => this.pratosList = Pratos
      );
  }
}
