<html>
<head>
 <title>Tutorial Captcha by blog.microtrafh.com</title>
</head>
<body>
 <?php echo form_open('captcha/submit');?>
 <table>
  <tbody>
   <tr>
    <td><span>Nama</span></td>
    <td><input name="nama"></td>
   </tr>
   <tr>
    <td>Captcha</td>
    <td><?php echo $captcha_img;?><br>
     <input name="captcha"><br>
     <?php
      $wrong = $this->input->get('cap_error');
      if($wrong){
     ?>
      <span style="color:red;">Captcha yang kamu masukan salah, silahkan ulangi lagi</span>
     <?php
      }
     ?>
    </td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="submit" value="kirim"></td>
   </tr>
  </tbody>
 </table>
 <?php echo form_close();?> 
</body>
</html>