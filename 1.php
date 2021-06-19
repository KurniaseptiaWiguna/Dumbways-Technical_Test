<?php 
    function hitungVoucher($voucher = "DumbwaysJos",$belanja){
        switch($voucher){
            case 'DumbwaysJos':
                if($belanja>=50000){
                    $diskon=$belanja*21.1/100;
                    if($diskon > 20000){
                        $diskon=20000;
                        $jumlah_bayar= $belanja-$diskon;
                        $kembalian = $diskon;
                        
                        echo "Total Belanja: ".$belanja."<br>";
                        echo "Uang yang harus dibayar: ".$jumlah_bayar."<br>";
                        echo "Diskon: ".$diskon."<br>";
                        echo "Kembalian:".$kembalian."<br>";
    
                        
                    }
                    else{
                        $jumlah_bayar= $belanja-$diskon;
                        $diskon=0;
                        $kembalian=$diskon;
                        echo "Total Belanja: ".$belanja."<br>";
                        echo "Uang yang harus dibayar: ".$jumlah_bayar."<br>";
                        echo "Diskon: ".$diskon."<br>";
                        echo "Kembalian:".$kembalian."<br>";
                    }
                }
            break;
            case 'DumbwaysMantap':
                if($belanja>=80000){
                    $diskon=$belanja*30/100;
                    if($diskon > 40000){
                        $diskon=40000;
                        $jumlah_bayar= $belanja-$diskon;
                        $kembalian = $diskon;
    
                        echo "Total Belanja: ".$belanja."<br>";
                        echo "Uang yang harus dibayar: ".$jumlah_bayar."<br>";
                        echo "Diskon: ".$diskon."<br>";
                        echo "Kembalian:".$kembalian."<br>";
    
                        
                    }
                    else{
                        $jumlah_bayar= $belanja-$diskon;
                        $kembalian=$diskon;
                        echo "Total Belanja: ".$belanja."<br>";
                        echo "Uang yang harus dibayar: ".$jumlah_bayar."<br>";
                        echo "Diskon: ".$diskon."<br>";
                        echo "Kembalian:".$kembalian."<br>";
                    }
                }else{
                    $jumlah_bayar=$belanja;
                    $diskon=0;
                    $kembalian=$belanja-$diskon;
                    echo "Total Belanja: ".$belanja."<br>";
                    echo "Uang yang harus dibayar: ".$jumlah_bayar."<br>";
                    echo "Diskon: ".$diskon."<br>";
                    echo "Kembalian:".$kembalian."<br>";
                }
            break;
            }
        }

        echo hitungVoucher('DumbwaysJos',100000)."<br>";
        
?>