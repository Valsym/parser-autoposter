function chooseBrowser($type = NULL)
  {
    $kht = '(KHTML, like Gecko)';
    $awk = 'AppleWebKit/';
    $moz = 'Mozilla';
    $win = 'Windows';
    $chr = 'Chrome';
    $saf = 'Safari';
    $ubu = 'Ubuntu';
    $lin = 'Linux';
    $mac = 'Macintosh';
    $ium = 'Chromium';
    $ope = 'Opera';
    $pre = 'Presto';
    $com = 'compatible';
    $mcp = 'Media Center PC';
    $ncl = '.NET CLR';
    
    $browsers = array(
      'chrome' => array(
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.872.0 '.$saf.'/535.2',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.864.0 '.$saf.'/535.2',
        $moz.'/5.0 ('.$win.' NT 6.1) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.861.0 '.$saf.'/535.2',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_7_0) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.861.0 '.$saf.'/535.2',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_8) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.861.0 '.$saf.'/535.2',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.2 '.$kht.' '.$chr.'/15.0.860.0 '.$saf.'/535.2',
        $moz.'/5.0 (X11; '.$lin.' x86_64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.824.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.815.10913 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.815.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.814.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.813.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.2) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.813.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.813.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_7) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.813.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.812.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.811.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.810.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.810.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.809.0 '.$saf.'/535.1',
        $moz.'/5.0 (X11; '.$lin.' x86_64) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.803.0 '.$saf.'/535.1',
        $moz.'/5.0 (X11; '.$lin.' i686) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.803.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_7_0) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.803.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_7) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.803.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_5_8) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.803.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.801.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_5_8) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.801.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.2) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.794.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_7_0) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.794.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.0) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.792.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.2) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.792.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.792.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; PPC Mac OS X 10_6_7) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.790.0 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_7) '.$awk.'535.1 '.$kht.' '.$chr.'/14.0.790.0 '.$saf.'/535.1',
        $moz.'/5.0 (X11; CrOS i686 13.587.48) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.43 '.$saf.'/535.1',
        $moz.'/5.0 Slackware/13.37 (X11; U; '.$lin.' x86_64; en-US) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41',
        $moz.'/5.0 Arch'.$lin.' (X11; '.$lin.' x86_64) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 (X11; '.$lin.' x86_64) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 (X11; '.$lin.' i686) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.0; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 6.0) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.2; WOW64) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$win.' NT 5.1) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_7) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_3) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1',
        $moz.'/5.0 ('.$mac.'; Intel Mac OS X 10_6_2) '.$awk.'535.1 '.$kht.' '.$chr.'/13.0.782.41 '.$saf.'/535.1'
      ),
      'opera' => array(
        $ope.'/9.80 ('.$win.' NT 6.1; U; es-ES) '.$pre.'/2.9.181 Version/12.00',
        $ope.'/9.80 ('.$win.' NT 5.1; U; en) '.$pre.'/2.9.168 Version/11.51',
        $ope.'/9.80 (X11; '.$lin.' x86_64; U; fr) '.$pre.'/2.9.168 Version/11.50',
        $ope.'/9.80 (X11; '.$lin.' i686; U; hu) '.$pre.'/2.9.168 Version/11.50',
        $ope.'/9.80 (X11; '.$lin.' i686; U; ru) '.$pre.'/2.8.131 Version/11.11',
        $ope.'/9.70 ('.$lin.' ppc64 ; U; en) '.$pre.'/2.2.1',
        $ope.'/9.70 ('.$lin.' i686 ; U; zh-cn) '.$pre.'/2.2.0',
        $ope.'/9.70 ('.$lin.' i686 ; U; en-us) '.$pre.'/2.2.0',
        $ope.'/9.70 ('.$lin.' i686 ; U; en) '.$pre.'/2.2.1',
        $ope.'/9.70 ('.$lin.' i686 ; U; en) '.$pre.'/2.2.0',
        $ope.'/9.70 ('.$lin.' i686 ; U; ; en) '.$pre.'/2.2.1',
        $ope.'/9.70 ('.$lin.' i686 ; U; ; en) '.$pre.'/2.2.1',
        $ope.'/9.64 ('.$win.' NT 5.1; U; en) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; pl) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; hr) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; en-GB) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; en) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; de) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' x86_64; U; cs) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' i686; U; tr) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' i686; U; sv) '.$pre.'/2.1.1',
        $ope.'/9.64 (X11; '.$lin.' i686; U; pl) '.$pre.'/2.1.1',
        $ope.'/9.62 ('.$win.' NT 6.1; U; en) '.$pre.'/2.1.1',
        $ope.'/9.62 ('.$win.' NT 6.1; U; de) '.$pre.'/2.1.1',
        $ope.'/9.62 ('.$win.' NT 6.0; U; pl) '.$pre.'/2.1.1',
        $ope.'/9.62 ('.$win.' NT 6.0; U; nb) '.$pre.'/2.1.1',
        $ope.'/9.62 ('.$win.' NT 6.0; U; en-GB) '.$pre.'/2.1.1'
      ),
      'msie' => array(
        $moz.'/5.0 ('.$win.'; U; MSIE 9.0; Windows NT 9.0; en-US))',
        $moz.'/5.0 ('.$win.'; U; MSIE 9.0; '.$win.' NT 9.0; en-US)',
        $moz.'/5.0 ('.$com.'; MSIE 9.0; '.$win.' NT 7.1; Trident/5.0)',
        $moz.'/5.0 ('.$com.'; MSIE 9.0; '.$win.' NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)',
        $moz.'/5.0 ('.$com.'; MSIE 8.0; '.$win.' NT 5.2; Trident/4.0; '.$mcp.' 4.0; SLCC1; '.$ncl.' 3.0.04320)',
        $moz.'/5.0 ('.$com.'; MSIE 8.0; '.$win.' NT 5.1; Trident/4.0; '.$ncl.' 1.1.4322; '.$ncl.' 2.0.50727)',
        $moz.'/5.0 ('.$win.'; U; MSIE 6.0; '.$win.' NT 5.1; SV1; '.$ncl.' 2.0.50727)',
        $moz.'/5.0 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1; SV1; '.$ncl.' 2.0.50727)',
        $moz.'/5.0 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1; SV1; '.$ncl.' 1.1.4325)',
        $moz.'/5.0 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1)',
        $moz.'/45.0 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1)',
        $moz.'/4.08 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1)',
        $moz.'/4.01 ('.$com.'; MSIE 6.0; '.$win.' NT 5.1)',
        $moz.'/4.0 (X11; MSIE 6.0; i686; '.$ncl.' 1.1.4322; '.$ncl.' 2.0.50727; FDM)',
        $moz.'/4.0 ('.$win.'; MSIE 6.0; '.$win.' NT 6.0)',
        $moz.'/4.0 ('.$win.'; MSIE 6.0; '.$win.' NT 5.2)',
        $moz.'/4.0 ('.$win.'; MSIE 6.0; '.$win.' NT 5.0)',
        $moz.'/4.0 ('.$win.'; MSIE 6.0; '.$win.' NT 5.1; SV1; '.$ncl.' 2.0.50727)'
      ),
      'firefox' => array(
        $moz.'/5.0 (X11; U; '.$lin.' i586; de; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 (X11; U; '.$lin.' amd64; rv:5.0) Gecko/20100101 Firefox/5.0 (Debian)',
        $moz.'/5.0 (X11; U; '.$lin.' amd64; en-US; rv:5.0) Gecko/20110619 Firefox/5.0',
        $moz.'/5.0 (X11; '.$lin.') Gecko Firefox/5.0',
        $moz.'/5.0 (X11; '.$lin.' x86_64; rv:5.0) Gecko/20100101 Firefox/5.0 FirePHP/0.5',
        $moz.'/5.0 (X11; '.$lin.' x86_64; rv:5.0) Gecko/20100101 Firefox/5.0 Firefox/5.0',
        $moz.'/5.0 (X11; '.$lin.' x86_64) Gecko Firefox/5.0',
        $moz.'/5.0 (X11; '.$lin.' ppc; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 (X11; '.$lin.' AMD64) Gecko Firefox/5.0',
        $moz.'/5.0 (X11; FreeBSD amd64; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 6.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 6.1; Win64; x64; rv:5.0) Gecko/20110619 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 6.1; Win64; x64; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 6.1.1; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 5.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 5.1; U; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 5.0; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 ('.$win.' NT 5.0; rv:5.0) Gecko/20100101 Firefox/5.0',
        $moz.'/5.0 (U; '.$win.' NT 5.1; rv:5.0) Gecko/20100101 Firefox/5.0'
      )
    );
    if (isset($type))
    {
      $browsers = $browsers[$type];
      return $browsers[rand(0, count($browsers)-1)];
    }
    else
    {
      $allbrowsers = array();
      foreach ($browsers as $browser_type){$allbrowsers = array_merge($allbrowsers, $browser_type);}
      return $allbrowsers[rand(0, count($allbrowsers)-1)];
    }
  }