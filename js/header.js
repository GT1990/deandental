let header = `
<header class="header">
    <div class="section1">
      <div class="left"></div>
      <div class="center"><a href="index.html"><img src="img/DeanDentalGroup.png" /></a></div>
      <div class="call-to-action"><a href="schedule.html" class="schedule">Schedule appointment</a></div>
    </div>
    <nav>
      <a href="dentures.html">DENTURES</a>
      <a href="implants.html">DENTAL IMPLANTS</a>
      <a href="mottoaligners.html">MOTTO ALIGNERS</a>
      <a href="dental-services.html">GENERAL DENTAL SERVICES</a>
      <a href="pricing-offers.html">COSTS & AFFORDABILITY</a>
      <a href="dental-financing-and-insurance.html">DENTAL FINANCING AND INSURANCE</a>
    </nav>
  </header>`;

class Header extends HTMLElement {
  connectedCallback() {
    this.innerHTML = header;
  }
}

customElements.define("header-template", Header);
