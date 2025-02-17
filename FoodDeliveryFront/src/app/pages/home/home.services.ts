import { HttpClient, HttpHeaders } from '@angular/common/http';
import { BASE_URL } from '../../../api/api';
import { Prato } from './../../interfaces/interfaces';
import { Observable } from 'rxjs';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})

export class HomeService {
  urlhome = BASE_URL + 'api/home';
  urlprato = BASE_URL + 'prato/';
  constructor(
    private http: HttpClient
  ){}

  loadHomePage(token:string):Observable<Prato[]> {
    var header = new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + token
    });
    return this.http.get<Prato[]>(this.urlhome , {headers: header})
  }

}

