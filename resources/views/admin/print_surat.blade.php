<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>These</title>
  </head>
  <body>
    <table>
      <tr>
        <th>no</th>
        <th>perihal</th>
        <th>lampiran</th>
        <th>isi</th>
      </tr>
      <tr>
        <td>1</td>
        <td>{{$surat->lampiran}}</td>
        <td>{{$surat->perihal}}</td>
        <td>{{$surat->isi_surat}}</td>
      </tr>
    </table>
  </body>
</html>
