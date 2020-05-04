<table style="display: inline-block;border-collapse: collapse;border-radius:5px;margin: 2.5px;width: 190px;background:#111;padding:2.5px;">
  <tbody>
    <tr style="" >
      <td colspan="2" valign="top">
<table style="width:100%;text-align:center;border-radius:5px;border:3px solid #fff;background:#fff;">
  <tbody>
    <tr>
      <td style="border:0px solid #666;color:#666;font-weight:bold;text-transform:uppercase;color:#666;background:#fff;" valign="top" colspan="2">
	    <img style="margin:0px;width:60%;" src="<?php echo $v_logo;?>" alt="logo"/>
	  	<!--NUM-->
		<div style="float:right;margin-top:0px;width:5%;margin-left:5px;font-size:7px;color:#666;"><?php echo " [$v_num]";?></div>
		<!--NUM-->	
	  </td>
    </tr>
	

			<!--USER-->
			<?php if($v_opsi=='up'){ ?>
    <tr>
      <td style="border-radius:5px;border:0px solid #666;color:#666;font-weight:bold;font-size:10px;" valign="top">USERNAME</td>
    </tr>
    <tr>
      <td style="border-radius:5px;border:1px solid #666;color:#666;font-weight:bold;font-size:16px;" valign="top"><?php echo $v_user;?></td>
    </tr>
    <tr>
      <td style="border-radius:5px;border:0px solid #666;color:#666;font-weight:bold;font-size:10px;" valign="top">PASSWORD</td>
    </tr>
    <tr>
      <td style="border-radius:5px;border:1px solid #666;color:#666;font-weight:bold;font-size:16px;" valign="top"><?php echo $v_pass;?></td>
    </tr>
			<?php }else{ ?>
    <tr>
      <td style="border-radius:5px;border:0px solid #666;color:#666;font-weight:bold;font-size:10px;" valign="top" colspan="2">VOUCHER</td>
    </tr>
    <tr>
      <td style="border-radius:5px;border:1px solid #666;color:#666;font-weight:bold;font-size:16px;" valign="top" colspan="2"><?php echo $v_user;?></td>
    </tr>
			<?php } ?>
  </tbody>
</table>
	  </td>
    </tr>
    <tr>
      <td style="color:#666;width:30px;" valign="middle">
	  <div class="teks_berdiri"><small style="font-size:10px;">Rp.</small><?php echo $v_harga;?>,-
	  <br/><small style="font-size:10px;"><?php echo $v_tlimit ?> / <?php echo $v_valid ?> / <?php if(empty($v_dlimit)){?>Unlimited<?php }else{?><?php echo $v_dlimit; }?></small>
</div>
	  </td>
      <td style="" valign="top">
<table style="width:100%;border-radius:5px;border:3px solid #fff;background:#fff;">
  <tbody>
    <tr>
      <td style="" valign="top">
	  <ul style="font-size:10px;margin:0 0 0 10px;padding:0;">
	  <li>Hubungkan ke Wifi <b><?php echo $v_spot;?></b></li>
	  <li>Buka aplikasi browser/chrome ketika alamat <b>http://<?php echo $v_dns;?></b> dan masukkan kode voucher</li>
	  <li>Simpan voucher ini sampai masa aktif habis</li>
	  </ul>
	  </td>
    </tr>
    <tr>
      <td style="font-size:11px;text-align:center;font-weight:700" valign="top">Call/WA <?php echo $v_hp;?></td>
    </tr>
  </tbody>
</table>
	  </td>
    </tr>
  </tbody>
</table>


<style>
.teks_berdiri {
     writing-mode:tb-rl;
    -webkit-transform:rotate(-90deg);
    -moz-transform:rotate(-90deg);
    -o-transform: rotate(-90deg);
    -ms-transform:rotate(-90deg);
    transform: rotate(180deg);
    white-space:nowrap;
	text-align:center;
	font-weight:700;
    font-size: 16px;
    color: #FFF;
    text-transform: uppercase;
}
</style>