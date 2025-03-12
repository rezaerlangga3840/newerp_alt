<html>
  <head>
    <style>
     td{
       font-size: 16px;
       line-height: 1.2;
     }
     body{
       width: 21cm;
       height: 33cm;
       margin-left: auto;
       margin-right: auto;
     }
     p{
       font-size: 16px;
       text-align: justify;
     }
     th{
       font-size: 16px;
     }
     .css-serial {
       counter-reset: serial-number;  /* Atur penomoran ke 0 */
      }
      .css-serial td:first-child:before {
        counter-increment: serial-number;  /* Kenaikan penomoran */
        content: counter(serial-number);  /* Tampilan counter */
        font-family: Arial;
      }
      table{
        font-family: Arial;
      }
      td{
        vertical-align: top;
      }
    </style>
  </head>
  <body onload="window.print();">
    <!---->
    <table width="100%" cellspacing="40">
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td rowspan="6" width="100px">
                <img src="{{url('img/jatim.png')}}" width="80px">
              </td>
              <td align="center"><font face="Arial">PEMERINTAH PROVINSI JAWA TIMUR</font></td>
            </tr>
            <tr>
              <td align="center"><font face="Arial"><b style="font-size:20px">DINAS KOMUNIKASI DAN INFORMATIKA</b></font></td>
            </tr>
            <tr>
              <td align="center"><font face="Arial">Alamat : Jl. A. Yani  No. 242-244 Surabaya Telp. (031) 8294608</font></td>
            </tr>
            <tr>
              <td align="center"><font face="Arial">Fax. (031) 8294517 Website : kominfo.jatimprov.go.id</font></td>
            </tr>
            <tr>
              <td align="center"><font face="Arial">Email : kominfo@jatimprov.go.id</font></td>
            </tr>
            <tr>
              <td align="center"><font face="Arial"><b><u>SURABAYA 60235</u></b></font></td>
            </tr>
            <tr height="10px">

            </tr>
          </table>
          @yield('content')
        </td>
      </tr>
    </table>
    
  </body>
</html>