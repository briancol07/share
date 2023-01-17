import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class SpotifyService {
  url : string = 'https://api.spotify.com/v1/browse/new-releases?limit=10';
  constructor(private http : HttpClient) {


   }


   getNewReleases() {
     const headers = new HttpHeaders({
      'Authorization': 'Bearer BQAY1Fg8d8ONJree0glP23ot5iDMDSMljb1rULZn1ooLuVPgf8GXeb_79oDUL2EmfBb-1QOQR_kXcqwNJv2-MmGL1q_6H41vuG4syQhg8NcZQw8SALYQzt2Tk535l5W0ErunOrpw1LP3lu__FmZI_rpxqQalcuPSUh_UbA'
     });
    return this.http.get(this.url,{headers});
  }  
}
