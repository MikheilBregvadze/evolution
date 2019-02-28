@extends('layouts.app')

@section('content')
<home-page inline-template>
<div>
@include('homePage.header')
<main>
    <div class="page-title color-white pt-5" style="background: url('/images/bg-piece.png') center center / cover no-repeat">
        <div class="container">
            <h2 class="fs-32 pt-5 pb-3">FAQ</h2>
        </div>
    </div>
    <div class="faq pt-5">
        <div class="container">
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW CAN I BECOME AN INVESTOR OF THE ZONDERS COMPANY?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Firstly, you must register. Fill out the registration form. We recommend you to specify only true data. Create a login, a password and specify your email. After confirming your registration, you can log in your profile and use all services of the website: to specify payment details, credit the account, choose the investment plan, make a deposit, etc.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">WHAT ELECTRONIC PAYMENT SYSTEMS CAN I USE FOR FINANCIAL OPERATIONS?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    We work with the following electronic payment systems: Perfect Money, Bitcoin, Payeer, Yandex Money, Dash, Nix money, Ethereum, Monero. 
                    If you do not have a wallet in these systems, you can create it by using the following links:
                    <ul>
                        <li>1. Perfect Money: <a href="">perfectmoney.is</a></li>
                        <li>2.	Bitcoin: <a href="#">www.coinpayments.net</a><li>
                        <li>3.	Payeer: <a href="#">payeer.com</a><li>
                        <li>4.	Yandex money: <a href="#">money.yandex.ru</a><li>
                        <li>5.	Dash: <a href="#">www.dash.org</a><li>
                        <li>6.	Nix money: <a href="#">www.nixmoney.com</a><li>
                        <li>7.	Ethereum: <a href="#">www.ethereum.org</a><li>
                        <li>8.	Monero: <a href="#">monero.org</a><li>                                    
                    </ul>                        
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">CAN I CHANGE MY PASSWORD, PAYMENT DETAILS AND EMAIL?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                        You can change your password yourself in your profile. You can change your email and wallet number you use to make payments only through the project administrator by making a request via one of the contacts specified on the website.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW CAN I WITHDRAW MY PROFIT?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Depending on the investment plan you chose, the profit is formed from the accrual percent and deposit. As soon as funds are credited to your personal account, you can request to withdraw them or create a new deposit by using your personal account. The money will be manually sent to your wallet of the electronic payment system you used to make a deposit. The funds accrued according to the affiliate program are available for immediate withdrawal.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">DO YOU HAVE AN AFFILIATE PROGRAM?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Yes, we have developed an affiliate program. We recommend to read its terms and conditions in the relevant category on the website or by using the following link.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">CAN I OPEN SEVERAL ACCOUNTS AT ONCE?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Multiple registrations are prohibited. If the project administration detects the fact of incompliance with this rule, all accounts of the investor who breached it will be automatically blocked without returning funds from the accounts.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW CAN I MAKE A DEPOSIT?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    After registering, read about investment plans and the amount of the minimum and maximum deposit. Choose the plan, log in your profile, and credit your personal account. After that you can cancel the selected investment plan and make a deposit. You can also use the affiliate’s remuneration and make a deposit from the affiliated account.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW MUCH TIME DOES IT TAKE TO CREDIT THE ACCOUNT?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Accounts are credited immediately and you can use the funds to start your investment activity at once.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">ARE THERE ANY COMMISSIONS FOR CREDITING/WITHDRAWING MONETARY FUNDS?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                        No, we do not charge any hidden commissions.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">WHAT IS THE MINIMUM AMOUNT TO WITHDRAW?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    The minimum amount to withdraw from the account is $0.1, for crypto-currency payment systems is 0.002btc in equivalent.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">ARE YOU GOING TO CONNECT ANY NEW ELECTRONIC PAYMENT SYSTEMS TO THE WEBSITE?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Yes, as developing the project, we are going to connect additional electronic payment systems.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">CAN I VERIFY MY INFORMATION IN MY PROFILE AT ANY TIME?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Yes, the information is available 24/7.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW MUCH TIME DOES IT TAKE MY WALLET IN THE ELECTRONIC PAYMENT SYSTEM TO BE CREDITED WITH FUNDS AFTER THE REQUEST TO WITHDRAW THEM?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Payments are made manually. Processing of requests may take up to 72 hours. Specify you payment details in your profile.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">IS THERE ANY LIMITATION FOR THE NUMBER OF DEPOSITS?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    No, you can make an unlimited number of deposits on all investment plans.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">I FORGOT THE PASSWORD FROM MY PROFILE. WHAT SHALL I DO?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    It is easy to recover a password. In order to do it, get in the category “Password Recovery” and enter the data specified during the registration. After that the project administration will send a link for the password recovery will be sent to the email specified by you when registering.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">IS THE REFERRAL REMUNERATION ACCRUED IF TO MAKE THEDEPOSIT FROM THE PERSONAL ACCOUNT?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Yes, the partner reward will be credited for deposits made from the balance.
                </div>
            </div>
            <div class="faq__item mb-5">
                <h3 class="fs-20 ff-bold color-blue py-2 d-table">HOW CAN I CONTACT THE PROJECT ADMINISTRATION IF I GET OTHER QUESTIONS?</h3>
                <div class="color-blue ff-light fs-18 b-before">
                    Get in the category “Contacts” on the project website and contact the project administration by using one of the specified contacts. You can also ask your question by using the feedback form.
                </div>
            </div>
        </div>
    </div>
</main>
@include('homePage.footer')
</div>
</home-page>
@endsection