<?php
DEFINE('SITENAME', 'BitBrawlers | Brawlers');

#GLOBAL
DEFINE('BETSOPEN', '베팅이 열렸습니다!');
DEFINE('BETSLOCKED', '베팅은 다음 경기까지 잠겨 있습니다');
DEFINE('SUCCESSPLACINGBET', '베팅을 성공적으로 마쳤습니다');
DEFINE('ERRORPLACINGBET', '베팅을 잘못하는 중입니다. 경기가 이미 잠겨 있습니다');
DEFINE('BETAMOUNTISEMPTY', '베팅금액을 올려주세요');
DEFINE('OPENPLACEYOURBETS', '지금 베팅하기');
DEFINE('NEXTPLACEYOURBETS', '다음 경기에 베팅하기');
DEFINE('ONGOINGPLACEYOURBETS', '경기가 진행 중입니다. 다음 경기에 베팅 할 수 있습니다');
DEFINE('BETONPLACED', '당신은 이미 배팅을 했습니다. 다음 경기가 끝날 때까지 기다려 주십시오');
DEFINE('WON', '이겼습니다');
DEFINE('LOST', '졌습니다');
DEFINE('DRAW', '무승부');

DEFINE('SERVERBLOCK', 'VPN이나 TOR을 비활성화 시키세요');
DEFINE('INVALIDUSERANDPASSWORD', '사용자이름과 비밀번호가 필요합니다');
DEFINE('INVALIDLOGIN', '로그인 오류. 다시 시도하십시오');
DEFINE('MINUSERNAME', '사용자이름은 6자 이상이어야 합니다');
DEFINE('INVALIDUSERNAME', '사용자이름에 특수 문자가 없어야합니다');
DEFINE('MINPASSWORD', '비밀번호는 6자 이상이어야 합니다');
DEFINE('INVALIDRECAPTCHA', 'reCaptcha가 잘못되었습니다');
DEFINE('TAGASBOT', '관리자는 귀하를 봇으로 간주하여 시스템 접근을 못하게 막았습니다');

DEFINE('FAUCETTAKEN', '일일 포셋 한도를 초과했습니다. 비트코인금액을 입금하세요.');
DEFINE('FAUCETGIVEN', '귀하는 이미 포셋금액을 받았습니다.');
DEFINE('GETFAUCETINVALID', '포셋을 사용하려면 BTC잔액이 0이 되어야합니다');
DEFINE('DUPLICATEUSERNAME', '사용자이름이 이미 사용 중입니다. 다른 이름을 선택하세요');
DEFINE('TRYAGAIN', '요청을 처리할 수 없습니다. 다시 시도해 주세요');

DEFINE('ZEROBALANCE', '귀하의 계정에는 잔고가 없습니다');
DEFINE('GREATERTHANBALANCE', '베팅금액이 잔고보다 큽니다');

DEFINE('WALLETADDRESSREQUIRED', '지갑주소가 필요합니다');
DEFINE('INVALIDWALLETADDRESS', '지갑주소가 잘못되었습니다');
DEFINE('WITHDRAWSUCCESS', '결제가 되었습니다');
DEFINE('WITHDRAWFAILED', '결제를 하는 중 오류가 발생했습니다. 다시 시도하십시오.');
DEFINE('WITHDRAWGREATERTHANBALANCE', '요청 금액이 잔액보다 많습니다');
DEFINE('WITHDRAWMINIMUMERROR', '결제를 보내는 중 오류가 발생했습니다. 최소출금액은 최소 요구금액보다 적습니다');
DEFINE('WITHDRAWPROCESSING', '출금이 진행 중입니다. 24시간 이내에 이용 가능합니다');
DEFINE('NOTENOUGHBALANCE', '서버에 잔액이 충분치 않음');
DEFINE('PAYMENTERROR', '지불 전송중 오류');

DEFINE('NAMEISREQUIRED', '이름이 필요합니다');
DEFINE('EMAILISREQUIRED', '이메일이 필요합니다');
DEFINE('INVALIDEMAIL', '이메일이 잘못되었습니다');
DEFINE('PASSWORDNOTMATCH', '비밀번호가 일치하지 않습니다');

DEFINE('RECORDADDED', '레코드가 추가되었습니다.');
DEFINE('RECORDUPDATED', '레코드가 갱신되었습니다');
DEFINE('RECORDDELETED', '레코드가 삭제되었습니다');
DEFINE('EMPTYRESULT', '레코드가 없습니다');

#SIGNIN
DEFINE('SIGNINHEADER1', '귀하의 브라울러에 비트코인을 배팅하세요!');
DEFINE('SIGNINHEADER2', '시작하기 위해 유저네임을 만드세요!');
DEFINE('PLACEHOLDER_USERNAME', '사용자이름');
DEFINE('PLACEHOLDER_PASSWORD', '비밀번호');
DEFINE('BTN_CREATECCOUNT', '계정 만들기');
DEFINE('BTN_SIGNIN', '사인-인');

#LOGIN
DEFINE('LOGINHEADER1', '로그인');
DEFINE('BTN_LOGIN', '로그인');
DEFINE('BTN_CREATEACCOUNT', '계정 만들기');

#SIDE BAR
DEFINE('TEAM_A', 'A팀');
DEFINE('TEAM_B', 'B팀');
DEFINE('AWAITINGPLAYERBETS', '플레이어가 베팅하기를 기다리는 중...');

#CONTENT
DEFINE('VS', '대');
DEFINE('WINNER', '승자');
DEFINE('BTN_BETONTHISTEAM', '이팀에 베팅하기');
DEFINE('PLACEHOLDER_BETAMOUNT', '베팅금액');

#MENU
DEFINE('MENUTITLE', '메뉴');
DEFINE('MAINMENU_DEPOSIT', '입금');
DEFINE('MAINMENU_WITHDRAW', '출금');
DEFINE('MAINMENU_FAUCET', '포셋');
DEFINE('MAINMENU_HOWTOBUYBITCOIN', '비트코인 사는 방법');
DEFINE('MENU_GAMETYPE', 'e스포츠');

DEFINE('SUBMENU_ACCOUNT', '계정');
DEFINE('SUBMENU_SETTINGS', '세팅');
DEFINE('SUBMENU_STATISTICS', '통계');
DEFINE('SUBMENU_REFERRALPROGRAM', '소개 프로그램');
DEFINE('SUBMENU_MYCOMMISSIONS', '내 커미션');
DEFINE('SUBMENU_LOGOUT', '로그아웃');

DEFINE('FOOTERMENU_HOME', '홈');
DEFINE('FOOTERMENU_HOWTOBUYBITCOIN', '비트코인 사는 방법');
DEFINE('FOOTERMENU_WHATISBITCOIN', '비트코인이란 무엇인가');
DEFINE('FOOTERMENU_TERMS', '서비스 조건');

#DEPOSIT
DEFINE('DEPOSITBITCOINTOTHISADDRESS', '이주소에 비트코인을 입금하세요.');
DEFINE('BTN_COPYADDRESS', '주소를 클립보드에 복사하세요');

#WITHDRAW BITCOIN
DEFINE('WITHDRAWBITCOINHEADER', '비트코인 인출하기');
DEFINE('PLACEHOLDER_ADDRESS', '주소');
DEFINE('PLACEHOLDER_AMOUNT', '금액');
DEFINE('MINIMUMWITHDRAWALIS', '최소 인출금액');
DEFINE('BTN_SEND', '보내기');

#REFERRAL CODE
DEFINE('REFERRALCODEHEADING', '리퍼럴 코드');
DEFINE('REFERRALCODECONTENT', '이 코드를 친구와 나누고 그들의 우승금액의 일부를 획득하십시오!');
DEFINE('BTN_COPYCODE', '클립코드에 코드를 복사하세요');

#WITHDRAW COMMISSION
DEFINE('WITHDRAWCOMMISSIONHEADER', '커미션 인출하기');
DEFINE('BTN_WITHDRAWCOMISSION', '커미션 인출하기');

#SETTINGS
DEFINE('SETTINGSHEADER', '세팅');
DEFINE('PLACEHOLDER_NAME', '이름');
DEFINE('PLACEHOLDER_NEWPASSWORD', '새 비밀번호');
DEFINE('PLACEHOLDER_RENEWPASSWORD', '비밀번호 재입력');

#PLACE BET
DEFINE('P_YOURBET', '귀하의 베팅');
DEFINE('P_BTCON', 'BTC');
DEFINE('BTN_CONFIRM', '확인');
DEFINE('P_PROFIT', '수익');
DEFINE('P_PLACEBETS', '베팅하기');
DEFINE('P_MATCHISONGOING', '경기가 진행중입니다');
DEFINE('P_PLACEDBETON', '귀하는 베팅을 했습니다');
DEFINE('P_FOR', '위하여');

#STATISTICS
DEFINE('ROWHEADER_MATCHDETAILS', '매치 상황');
DEFINE('ROWHEADER_BETAMOUNT', '베팅금액');
DEFINE('ROWHEADER_MATCHRESULT', '경기결과');
DEFINE('ROWHEADER_USER', '사용자');
DEFINE('ROWHEADER_CREDIT', '크레딧');
DEFINE('ROWHEADER_DEBIT', '데빗');

#NOTIFICATION ALERT
DEFINE('ALERTNOTIF_WONTEXT1', '이겼습니다!');
DEFINE('ALERTNOTIF_WONTEXT2', '배팅에서 우승하신 것을 축하드립니다!');
DEFINE('ALERTNOTIF_LOSTTEXT1', '졌습니다!');
DEFINE('ALERTNOTIF_LOSTTEXT2', '다음번엔 행운을 빕니다!');

#WHAT IS BITCOIN
DEFINE('CONTENT_WHATISBITCOIN', 
'<h2>비트코인이란 무엇인가?</h2>

비트코인은 인터넷을 통해 지불할 수있는 디지털 통화입니다. 왜 비트코인은 베팅에 더 좋은가요? <br />

비트코인은 탈중앙화 통화입니다. 비트코인 네트워크는 어느 정보나 은행에 통제받거나 분산된 통화로 비트코인 네트워크는 통제되거나 정부나 은행의 규제를 받지 않습니다. <br />

비트코인 주소는 몇초 만에 설정될 수 있으며 Bitbrawlers에 가입할 때 이미 만들어졌습니다. <br />
비트 코인으로 자금을 이체하는 것이 더 빠르고 쉬우며 수수료는 전통적인 은행 송금보다 낮습니다. 마찬가지로 도박 예금을 제한하는 국가에서는 비트코인으로 도박하기가 훨씬 쉽습니다.
<br />
비트코인 주소는 익명입니다. 귀하의 비트코인 주소에는 개인 정보가 첨부되지 않으며 귀하의 Bitbrawlers 계정은 완전히 익명입니다.
특정 비트코인 거래소는 개인정보를 요구할 수 있지만 익명으로 돈을 교환할 수 있으며이 가이드의 뒷부분에서 설명합니다.

<h2>어떻게 비트코인을 살수 있나요?</h2>
비트코인은 분산되어 있기 때문에 비트코인을 살 수있는 여러 교환소가 있습니다.
그들은 전통적인 외환거래와 똑같이 작동합니다. 당신은 당신의 전통적인 통화를 비트코인으로 교환합니다. <br />
또는 컴퓨터의 CPU 및 GPU 처리능력을 이용하여 Bitbrawlers에서 쓸수 있는 <u>비트코인을 채굴할 수도 있습니다.</u>
하지만 하루에 몇 페니 이상을 만들고 싶다면 <u>강력한 PC가 필요합니다. </u> <br />

이 가이드에서는 각 옵션의 장단점뿐만 아니라 사용 가능한 최상의 옵션을 검토합니다.
<!-- -->
<h3><a href="https://www.coinbase.com/" target="_blank">Coinbase.com</a></a></h3>
<strong>장점:</strong><br>
<ul>
    <li> 코인베이스는 비트코인 교환소의 페이팔입니다. 온라인에서 비트코인을 구입하는 가장 쉽고 빠르며 사용자 친화적인 방법입니다. 특히 미국인에게 이상적이지만 총35개 국가에서 사용할 수 있습니다. </li>
    <li> 미국에서 머니 서비스 사업으로 라이센스를 받음으로써 미국인이 비트코인을 온라인으로 구매할 수있는 가장 쉬운 방법입니다. 코인베이스의 모든 예금은 보장되어 있으므로 코인베이스에 저장되는 자산은 도둑맞을 걱정을 할 필요가 없습니다. </li>
    <li> 코인베이스는 미국, 캐나다, 싱가포르, 호주, 오스트리아, 벨기에, 불가리아, 크로아티아, 키프로스, 체코, 덴마크, 핀란드, 그리스, 헝가리, 아일랜드, 이탈리아, 저지, 리히텐슈타인, 룩셈부르크, 몰타, 모나코, 네덜란드, 노르웨이, 폴란드, 포르투갈, 산 마리노, 슬로바키아, 스페인, 스웨덴, 스위스 및 영국에서 사용할 수 있습니다. </ li>
    <li> 신용카드 및 직불카드 (비자 및 마스터카드 만 사용) 또는 은행 송금을 통해 비트코인을 구입할 수 있습니다. 은행 송금 옵션은 Paypal처럼 작동하므로 Paypal 계정을 사용할 수 있으면 문제가 없습니다. 미국인은 은행 송금을 위해 ACH를 사용할 수 있지만 유럽인은 은행 송금을 위해 SEPA를 사용할 수 있습니다. </li>
    <li> 비트코인 구매 외에도 비트코인을 판매하여 전통적인 법정화폐로 은행 계좌에 입금시킬 수 있습니다. </li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>Wells Fargo, JP Morgan, Bank of America, Citibank 또는 Capital One의 신용카드를 소지한 미국시민권자인 경우 비트코인 구매지불이 거부될 수 있습니다. 백업 신용카드를 준비하십시오. 직불카드 및 은행송금에는 영향이 없습니다.</li>
    <li>Lloyds, Halifax, MBNA, Bank of Scotland 또는 Virgin Money의 신용카드를 소지한 영국 시민권자는 비트코인 구매지불이 거부될 수 있습니다. 백업 신용카드를 준비하십시오. 은행송금에는 영향이 없습니다.</li>
    <li>신분증이나 여권을 제시해야하지만 과정이 매우 쉬우며 개인정보는 Bitbrawlers나 제3자와 공유되지 않습니다. 익명성이 주요 관심사인 경우 익명의 입금 옵션에 대해 자세히 읽어보십시오.</li>
</ul>

<!-- -->
<h3><a href="https://www.coinmama.com/" target="_blank">Coinmama.com</a></a></h3>
<strong>장점:</strong><br>
<ul>
    <li>이스라엘에 기반을두고 미국에서 머니 서비스 사업으로 라이센스를 받았습니다.</li>
    <li>미국을 포함 영국, 독일, 폴란드, 필리핀, 대만, 홍콩, 마카오 등 188개국의 사용자들이 사용할 수 있습니다.</li>
    <li>사용하기 쉬우며 일단 인증되면 즉시 신용 카드 또는 직불 카드 (비자 및 마스터 카드만 가능)로 비트코인을 구입할 수 있습니다.</li>
    <li>훌륭하고 친절한 고객 서비스</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>Wells Fargo, JP Morgan, Bank of America, Citibank 또는 Capital One의 신용카드를 소지한 미국시민권자인 경우 비트코인 구매지불이 거부될 수 있습니다. 백업 신용카드를 준비하십시오. 직불카드 및 은행송금에는 영향이 없습니다.</li>
    <li>Lloyds, Halifax, MBNA, Bank of Scotland 또는 Virgin Money의 신용카드를 소지한 영국 시민권자는 비트코인 구매지불이 거부될 수 있습니다. 백업 신용카드를 준비하십시오. 은행송금에는 영향이 없습니다.</li>
    <li>미국의 경우 Coinmama는 애리조나, 캘리포니아, 콜로라도, 플로리다, 일리노이, 인디애나, 캔자스, 켄터키, 루이지애나, 매사추세츠, 메릴랜드, 미시간, 미주리, 몬태나, 네바다, 뉴저지, 노스 캐롤라이나, 펜실베니아, 사우스 캐롤라이나, 테네시, 텍사스, 버지니아, 위스콘신에서만 사용이 가능합니다.</li>
    <li>신분증이나 여권을 제시해야하지만 과정이 매우 쉬우며 개인정보는 Bitbrawlers나 제3자와 공유되지 않습니다. 익명성이 주요 관심사인 경우 익명의 입금 옵션에 대해 자세히 읽어보십시오.</li>
</ul>

<!-- -->
<h3><a href="https://cubits.com/" target="_blank">Cubits.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li> 독일기반 교환소로서 유럽인에게도 훌륭한 옵션이며 대부분의 다른 국가에서도 사용할 수 있습니다. </li>
    <li> 다양한 비트코인 구매 옵션 : 비자, 마스터 카드, SEPA 은행 송금 및 SWIFT 은행 송금 </li>
    <li> 유로화로 비트코인을 즉시 판매할 수 있습니다. </ li>
    <li> 영어, 독일어 및 폴란드어를 구사하는 우수하고 고도의 지식을 갖춘 고객 서비스 </ li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>미국사람들이 사용할 수 없습니다.</li>
    <li>Lloyds, Halifax, MBNA, Bank of Scotland 또는 Virgin Money의 신용카드를 소지한 영국 시민권자는 비트코인 구매지불이 거부될 수 있습니다. 백업 신용카드를 준비하십시오. 은행송금에는 영향이 없습니다.</li>
    <li>신분증이나 여권을 제시해야하지만 과정이 매우 쉬우며 개인정보는 Bitbrawlers나 제3자와 공유되지 않습니다. 익명성이 주요 관심사인 경우 익명의 입금 옵션에 대해 자세히 읽어보십시오.</li>
</ul>

<!-- -->
<h3><a href="https://www.bitpanda.com/en" target="_blank">Bitpanda.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>오스트리아에 기반을 둔이 사이트는 유럽인을 위한 환상적인 또 다른 교환소입니다. </li>
    <li>이 교환소에는 다른 교환보다 많은 구매 옵션이 있습니다 : 비자, 마스터 카드, SEPA 은행 송금, EPS, Giropay, Skrill, Sofort, Neteller. 도박에 경험이 많은 사람들은 이 구매 옵션에 아주 친숙할 것입니다. </li>
    <li> 무료로 다른 Bitpanda.com 회원에게 전송할 수 있습니다. </li>
    <li> 즉시 비트 코인을 판매하고 USD, EUR 또는 CHF로 지불 할 수 있습니다. </li>
    <li> 유능한 고객 서비스 직원 </li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>대부분의 지불옵션은 유럽 시민에게만 적용됩니다. 비유럽인은 Neteller를 사용하여 Bitpanda로만 자금을 이체할 수 있습니다. 이는 여전히 매우 좋은 옵션이며 도박꾼에게 인기가 있습니다. </li>
    <li>신분증이나 여권을 제시해야하지만 과정이 매우 쉬우며 개인정보는 Bitbrawlers나 제3자와 공유되지 않습니다. 익명성이 주요 관심사인 경우 익명의 입금 옵션에 대해 자세히 읽어보십시오.</li>
</ul>

<!-- -->
<h3><a href="https://wallofcoins.com/en/" target="_blank">Wallofcoins.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>현금으로 비트코인을 구입할 수있는 매우 쉬운 에스크로 구매 서비스</li>

    <li>ID가 필요하지 않습니다. 전화번호만 입력하면 됩니다.</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>미국, 영국, 캐나다, 아르헨티나, 호주, 브라질, 캐나다, 독일, 라트비아, 멕시코, 폴란드, 필리핀 및 루마니아에서만 제공되는 서비스</li>
</ul>

<!-- -->
<h3><a href="https://localbitcoins.com/" target="_blank">Localbitcoins.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>익명의 피어투피어 비트코인 구매. localbitcoins.com에서 직접 비트코인을 구입하는 대신 localbitcoins.com에 등록된 개인으로부터 비트코인을 구매.</li>
    <li>베네수엘라, 짐바브웨, 중국과 같은 매우 어려운 국가에서도 작동합니다.</li>
    <li>비트 코인을 구입하는 방법은 여러 가지가 있습니다. 직접 판매자와 만나 현금을 지불하거나 은행 송금, Paypal, Western Union, Moneygram, Moneybookers, Neteller, Steam 기프트카드 코드를 통해 온라인으로 결제 할 수 있습니다. </li>
    <li>여기에서도 익명으로 비트코인을 판매 할 수도 있습니다.</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>이것은 비트코인의 이베이 또는 크레이그 리스트입니다. 즉, 사기꾼을 조심해야합니다. 오랜 거래내역과 좋은 평판을 가진 판매자에게서만 비트코인을 구입하십시오. 신뢰할 수있는 사람인지 확실하지 않은 경우 언제든지 이메일을 보내면 지원받을 수 있습니다. <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="187a74777b737b707971767a6d6b71767d6b6b586b797e7d357579717436767d6c">[email&#160;protected]</a></li>
</ul>

<!-- -->
<h3><a href="https://www.buybitcoin.ph/" target="_blank">BuyBitcoin.ph</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>이것은 필리핀 시민들이 비트코인을 온라인으로 구매할 수있는 환상적인 방법입니다.</li>
    <li>필리핀에서 비트코인을 사는 가장 쉬운 방법입니다.</li>
    <li>이 서비스는 좋은 프라이버시를 제공합니다.</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>필리핀에서만 사용가능</li>
</ul>

<!-- -->
<h3><a href="https://www.korbit.co.kr/" target="_blank">Korbit.co.kr</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>한국에서 최초, 최대규모의 비트코인 교환소.</li>
    <li>많은 한국 거래소와 달리 Korbit은 안전하고 콜드지갑에 비트코인을 보관합니다.</li>
    <li>비트코인 매매가 용이</li>
    <li>한국인 고객 서비스 우수</li>
    <li>비트코인 규제</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>FAQ는 한국어로만 제공되지만이 교환소는 외국인도 계정을 개설할 수 있습니다. 대부분의 다른 페이지는 영어로되어 있습니다.</li>
</ul>

<!-- -->
<h3><a href="https://bitflyer.com/ja-jp/" target="_blank">BitFlyer.jp</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>일본 최대의 비트코인 교환소</li>
    <li>상당히 비공개적인 교환소; 전화번호와 Facebook 계정만 있으면 최대 250,000엔의 구매 가능</li>
    <li>비트코인 매미에 적합</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>일본에서만 사용가능</li>
    <li>고객지원은 아침 9시에서 7시까지만 지원</li>
    <li>250,000엔 이상인 비트코인 구매에는 신원확인이 필요합니다.</li>
</ul>

<!-- -->
<h3><a href="https://www.bitoex.com/" target="_blank">Bitoex.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>타이완에서 쉽게 비트코인을 살 수 있는 교환소</li>
    <li>타이완에 있는 패밀리마트에서 비트코인을 살 수 있습니다.</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>타이완에서만 사용가능</li>
</ul>

<!-- -->
<h3><a href="https://www.nicehash.com/" target="_blank">Nicehash.com</a></h3>
<strong>장점:</strong><br>
<ul>
    <li>Nicehash는 고사양PC 또는 ASIC의 처리능력을 사용하여 비트코인 또는 기타 암호화폐 채굴기능을 제공하는 무료 소프트웨어를 제공합니다. 지불은 항상 채굴 중인 암호화폐와 상관없이 비트 코인으로 이루어집니다.</li>
    <li>비트코인 또는 기타 암호화폐를 PC의 처리 능력을 직접 사용하여 채굴하고 개인정보를 제공할 필요가 없기 때문에 매우 익명성이 높습니다.</li>
    <li>강력한 게임PC 또는 그래픽 워크스테이션을 사용하는 경우 중국과 같이 매우 제한적인 관할지에서도 효과적입니다.</li>
    <li>고급 사용자를위한 ASIC 지원.</li>
</ul>
<strong>단점:</strong><br>
<ul>
    <li>강력한 GPU나 ASIC가있는 고사양PC를 가지고 있지 않다면 신경끌것. 그래픽으로 집중적인 컴퓨터 게임을 할 수 없다면 랩톱은 아마도 자격이 없습니다.</li>
    <li>고사양PC는 한 달에 약 70달러의 비트코인 만 생산할 수 있습니다. 그래도 Bitbrawlers에서 도박을 하기에는 충분합니다. 비트코인을 더 많이 채굴하고 싶다면 더 많은 GPU를 구입하거나 ASIC을 구입해야 합니다.</li>
</ul>
');

#HOW TO BUY BITCOIN
DEFINE('CONTENT_HOWTOBUYBITCOIN', 
'비트 코인을 입금하려면 다음 주소를 복사하여 외부 비트코인 지갑 또는 비트코인 거래소 계좌에 붙여 넣으십시오. 다음 주소를 정확히 복사하십시오: 
: <br /><br />

<center><strong>'.getbitcoinaddress().'</strong><br /><br /></center>

이 주소는 BitBrawlers 계정에 비트 코인을 입금하는 고유한 비트코인 주소입니다. 이 주소는 대소문자를 구별합니다. 오타가 있으면 거래를 되돌릴 수 없으므로 주소에 올바르게 입력했는지 다시 한번 확인하십시오. 다음은 휴대 전화에 비트 코인지갑이 있고 모바일 지갑의 QR코드 스캔기능을 사용하려는 경우 QR코드 형식의 비트 코인 주소입니다: 
:<br /><br />

<center>
    <strong>'.getbitcoinaddress().'</strong><br /><br />
    <img src="https://chart.googleapis.com/chart?chs=150x150&amp;chld=L|2&amp;cht=qr&amp;chl=bitcoin:'.getbitcoinaddress().'">
</center>
');