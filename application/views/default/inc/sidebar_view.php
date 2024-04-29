<div class="dkt-sitebar-menu">
        <div class="dkt-sitebar-menu">
            <a class="dkt-sitebar-close" href="#"><i class="fa fa-times"></i></a>
            <div class="dkt-details-inner">
                <div class="logo">
                    <a href="<?php echo base_url();?>">
                        <img width="170" height="50" src="<?php echo base_url('uploads/'.$setting->site_logo);?>" alt="<?php echo $setting->site_baslik;?>">
                    </a>
                </div>
                <p class="details"><?php echo $setting->site_baslik;?></p>
                <div class="address-inner">
                    <h5>Adres</h5>
                    <p><?php echo $setting->adres;?></p>
                </div>
                <div class="address-inner">
                    <h5>Telefon</h5>
                    <p><?php echo $setting->tel;?></p>
                </div>
                <div class="address-inner">
                    <h5>WhatsApp</h5>
                    <p><?php echo $setting->whatsapp;?></p>
                </div>
                <div class="address-inner mb-0">
                    <h5>E-mail</h5>
                    <p><?php echo $setting->mail;?></p>
                </div>
            </div>
            
        </div>
    </div>