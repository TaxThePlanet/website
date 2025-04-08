<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaxThePlanet.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
    }
    nav {
      background-color: var(--red);
      padding: 0.75rem 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
      display: flex;
      justify-content: center;
      gap: 2rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 0;
    }
    nav a {
      color: var(--white);
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      transition: color 0.2s;
    }
    nav a:hover {
      color: var(--light-gray);
    }
    :root {
      --red: #b22234;
      --white: #ffffff;
      --blue: #3c3b6e;
      --light-gray: #f4f4f4;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: var(--light-gray);
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: var(--blue);
      color: var(--white);
      padding: 2rem;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 2.5rem;
    }
    section {
      padding: 2rem;
      max-width: 800px;
      margin: auto;
      background-color: var(--white);
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .highlight {
      background-color: #ffe0e0;
      padding: 1rem;
      border-left: 5px solid #cc0000;
      margin: 1rem 0;
    }
    ul li {
      margin: 0.5rem 0;
    }
    ul li i {
      margin-right: 0.5rem;
      color: #cc0000;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 1rem 0;
    }
    th, td {
      padding: 0.75rem;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: var(--blue);
      color: var(--white);
    }
    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    footer {
      background-color: var(--red);
      color: var(--white);
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <nav>
    <a href="#">Home</a>
    <a href="#">Calculator</a>
    <a href="#">Tariffs</a>
    <a href="#">Contact</a>
  </nav>
  <header>
    <h1><i class="fas fa-globe-americas"></i> TaxThePlanet.com</h1>
    <p><i class="fas fa-money-bill-wave"></i> "Bigger Paychecks" or a Big Regret?</p>
  </header>
  <section>
    <!-- Entire content body -->
    <h2 style="color: var(--blue);"><i class="fas fa-bolt"></i> Enter: Project 2025</h2>
<p>Project 2025 includes proposals to overhaul the tax system — pushing for a flat tax, eliminating the IRS, and replacing income tax with consumption taxes. Sounds revolutionary, but who really benefits?</p>

<h2 style="color: var(--red);"><i class="fas fa-table"></i> So, is flat tax better or worse?</h2>
<table>
  <tr><th>Person Type</th><th>Flat Tax Impact</th></tr>
  <tr><td>Low-income</td><td style="color: var(--red); font-weight: bold;">Likely pay more</td></tr>
  <tr><td>Middle-income</td><td style="color: var(--red); font-weight: bold;">May pay slightly more</td></tr>
  <tr><td>High-income</td><td style="color: green; font-weight: bold;">Likely pay less</td></tr>
  <tr><td>Families with kids</td><td style="color: var(--red); font-weight: bold;">Lose all credits</td></tr>
  <tr><td>Self-employed</td><td style="color: var(--red); font-weight: bold;">Lose deductions</td></tr>
</table>

<h2 style="color: var(--blue);"><i class="fas fa-calculator"></i> Side-by-Side: Old vs. New</h2>
<table>
  <tr><th></th><th>Current System (2024)</th><th>Flat Tax (15%)</th></tr>
  <tr><td>Gross Income</td><td>$63,000</td><td>$63,000</td></tr>
  <tr><td>Standard Deduction</td><td>$14,600</td><td style="color: var(--red); font-weight: bold;">None</td></tr>
  <tr><td>Taxable Income</td><td>$48,400</td><td>$63,000</td></tr>
  <tr><td>Total Tax Owed</td><td style="color: green;">$5,576</td><td style="color: var(--red); font-weight: bold;">$9,450</td></tr>
</table>

<h2 style="color: var(--blue);"><i class="fas fa-user-tie"></i> So what does that mean for you?</h2>
<p><strong>Without paycheck withholding</strong>, you’d need to manually save for your taxes. <strong style="color: var(--red);">So, realistically, you’d be paying like a subcontractor.</strong> That means tracking your income, saving for taxes, and probably making estimated quarterly payments.</p>

<h2 style="color: var(--blue);"><i class="fas fa-clipboard-list"></i> Just like a subcontractor or freelancer:</h2>
<table>
  <tr><th></th><th>Now</th><th>Under Flat Tax</th></tr>
  <tr><td>Taxes withheld automatically</td><td>✅</td><td>❌</td></tr>
  <tr><td>Refund likely</td><td>✅</td><td>❌</td></tr>
  <tr><td>Must budget manually</td><td>❌</td><td>✅</td></tr>
  <tr><td>Quarterly payments required</td><td>❌</td><td>✅</td></tr>
</table>

<h2 style="color: var(--red);"><i class="fas fa-exclamation-circle"></i> Why this is risky:</h2>
<ul>
  <li>People aren't used to setting aside taxes.</li>
  <li>Big bills come due at once — often when people are least prepared.</li>
  <li>No safety net from deductions or credits.</li>
</ul>

<h2 style="color: var(--blue);"><i class="fas fa-tools"></i> Solutions if this becomes law:</h2>
<ul>
  <li>Open a tax savings account.</li>
  <li>Automatically transfer 15% of each paycheck.</li>
  <li>Use apps to track and save for quarterly payments.</li>
  <li>Consult financial planners familiar with contractor-style budgeting.</li>
</ul>

<h2 style="color: var(--red);"><i class="fas fa-hand-holding-usd"></i> People usually depend on those refunds.</h2>
<p>Refunds help people pay off debt, buy essentials, or catch up on bills. Dave Ramsey says you shouldn't get a refund because it means you overpaid. But if you’re a low-income parent relying on the EIC — that <em>is</em> free money. And it’s going away.</p>
<p style="color: var(--blue);"><strong>Dave Ramsey is a quack.</strong></p>

<h2 style="color: var(--blue);"><i class="fas fa-wallet"></i> Under the proposed flat tax:</h2>
<p>No refunds. No credits. Just a big bill waiting at the end of the year. Hope you saved!</p>

<h2 style="color: var(--red);"><i class="fas fa-minus"></i> What’s lost with no refunds:</h2>
<ul>
  <li>Emergency cash boosts</li>
  <li>Debt relief</li>
  <li>Back-to-school savings</li>
  <li>Child tax credits</li>
  <li>EIC (Earned Income Credit)</li>
</ul>

<h2 style="color: var(--blue);"><i class="fas fa-sad-tear"></i> "Unfortunately, people won't realize this and will be like: 'YEAH! BIGGER PAYCHECK!'"</h2>
<p style="color: var(--red);">For the first 11 months, life feels good. Then April hits and people are blindsided by a tax bill they can’t pay.</p>

<h2 style="color: var(--blue);"><i class="fas fa-gavel"></i> And the government’s response?</h2>
<p>“We told you to save.” And that’s it. No help. No relief. Just penalties if you didn’t plan properly.</p>

<h2 style="color: var(--red);"><i class="fas fa-eye-slash"></i> They're going to bury this 'We told you to save.'</h2>
<p>It’ll be in the fine print, ignored by media, and never mentioned until the first wave of panic rolls in next April.</p>

<h2 style="color: var(--blue);"><i class="fas fa-theater-masks"></i> What they’ll actually say when tax bills hit:</h2>
<ul>
  <li>“It’s your responsibility to manage your money.”</li>
  <li>“This is the price of simplicity.”</li>
  <li>“At least you’re free from the IRS!”</li>
</ul>

<h2 style="color: var(--red);"><i class="fas fa-magic"></i> What’s really going on?</h2>
<p>This isn’t about fairness. It’s about erasing protections, simplifying the system for the rich, and shifting blame to individuals for struggling under new rules.</p>

<h2 style="color: var(--red);"><i class="fas fa-users-slash"></i> The people who suffer?</h2>
<ul>
  <li>Families with children</li>
  <li>Low- and middle-income earners</li>
  <li>People living paycheck to paycheck</li>
  <li>Anyone who doesn’t have the luxury to “just save” 15%</li>
</ul>
  <div style="text-align:center; font-size:0.85rem; padding: 1rem; margin-top: 2rem;">
  If you believe any information here is outdated, inaccurate, or misleading, please <a href="https://github.com/TaxThePlanet/website/issues" target="_blank" style="color: var(--blue); font-weight: bold; text-decoration: none;">submit an issue on GitHub</a>.
</div>
</section>
  
<footer>
    &copy; 2025 TaxThePlanet.com. Satirical, but sadly based on real changes.
</footer>
</body>
</html>
