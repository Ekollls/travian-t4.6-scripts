<h1 class="titleInHeader">Altın Satın Al </h1>
<center><?php
        if (isset($_GET['u'])) {
            if (!isset($packages[$_GET['u']]))
                exit('PAKET BULUNAMADI :(');
            $merchant_id    = '260593';
            $merchant_key   = 'tPcpm6LbzGstw9pS';
            $merchant_salt  = 'TTajj7A74WB7k32m';
            $email = $session->email;
            $payment_amount = $packages[$_GET['u']]['fiyat'] * 100;
            $swS = explode('.', $_SERVER['HTTP_HOST']);
            $merchant_oid = $swS[0] . '0SW0' . uniqid();
            $user_name = $session->username;
            $user_address = $_SERVER['HTTP_HOST'];
            $siteLink = trim((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'], '/');
            $user_phone = "05313767818";
            $merchant_ok_url = "$siteLink/satinal.php?t=3";
            $merchant_fail_url = "$siteLink/satinal.php?t=4";
            $user_basket = base64_encode(json_encode(array(
                array($packages[$_GET['u']]['paket'], $packages[$_GET['u']]['fiyat'], 1)
            )));
            if (isset($_SERVER["HTTP_CLIENT_IP"])) {
                $ip = $_SERVER["HTTP_CLIENT_IP"];
            } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else {
                $ip = $_SERVER["REMOTE_ADDR"];
            }
            $user_ip = $ip;
            $timeout_limit = "10";
            $debug_on = 0;
            $test_mode = 0;
            $no_installment = 1;
            $max_installment = 0;
            $currency = "TL";
            $hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $user_basket . $no_installment . $max_installment . $currency . $test_mode;
            $paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
            $post_vals = array(
                'merchant_id' => $merchant_id,
                'user_ip' => $user_ip,
                'merchant_oid' => $merchant_oid,
                'email' => $email,
                'payment_amount' => $payment_amount,
                'paytr_token' => $paytr_token,
                'user_basket' => $user_basket,
                'debug_on' => $debug_on,
                'no_installment' => $no_installment,
                'max_installment' => $max_installment,
                'user_name' => $user_name,
                'user_address' => $user_address,
                'user_phone' => $user_phone,
                'merchant_ok_url' => $merchant_ok_url,
                'merchant_fail_url' => $merchant_fail_url,
                'timeout_limit' => $timeout_limit,
                'currency' => $currency,
                'test_mode' => $test_mode
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);

            // XXX: DİKKAT: lokal makinanızda "SSL certificate problem: unable to get local issuer certificate" uyarısı alırsanız eğer
            // aşağıdaki kodu açıp deneyebilirsiniz. ANCAK, güvenlik nedeniyle sunucunuzda (gerçek ortamınızda) bu kodun kapalı kalması çok önemlidir!
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $result = @curl_exec($ch);

            if (curl_errno($ch))
                die("PAYTR BAĞLANTI BAŞARISIZ :" . curl_error($ch));

            curl_close($ch);

            $result = json_decode($result, 1);
            if ($result['status'] == 'success') {
                $ekle = $baglanDB->prepare("INSERT INTO odemeler SET email = ?, durum = ?,aciklama=?,tip=?,miktar=?,anahtar=?,time=?,ip=?");
                $ekle->execute([$email, "Beklemede", $packages[$_GET['u']]['paket'] . '|' . $packages[$_GET['u']]['cark'], $packages[$_GET['u']]['tip'], $packages[$_GET['u']]['miktar'], $merchant_oid, time(), $ip]);
                if ($ekle->rowCount())
                    $token = $result['token'];
                else
                    die("Beklenmedik bir hata meydana geldi!");
            } else {
                die("PAYTR BAŞARISIZ. reason:" . $result['reason']);
            }

        ?>

        <!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
        <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
        <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $token; ?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
        <script>
            iFrameResize({}, '#paytriframe');
        </script>
        <!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->
    <?php
            die();
        }

       
    ?>
      <center>  <table>
            <thead>
                <th>Paket</th>
                <th>Miktar</th>
                <th>Fiyat</th>
                <th>Bonus</th>
                <th>Eylem</th>
            </thead>
            <tbody>
                <?php
                foreach ($packages as $k => $paket) {
                    echo '<tr>';
                ?>
                    <td><?= $paket['paket'] ?></td>
                    <td><center><?= $paket['miktar'] ?></td>
                    <td><center><?= $paket['fiyat'] ?></td>
                    <td><center><?= $paket['cark'] ? $paket['cark'] . ' Çark' : 'Yok' ?></td>
                    <td><a href="satinal.php?t=2&u=<?= $k ?>">Satın Al</a></td>
                <?php
                    echo '</tr>';
                }
            
            ?>
            </tbody>
        </table>