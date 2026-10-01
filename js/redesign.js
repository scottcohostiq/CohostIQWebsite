(() => {
 const input = document.getElementById('property-count');
 const result = document.getElementById('monthly-cost');
 function update() {
  if (!input.value || !input.validity.valid) { result.textContent = 'Enter 1–9,999'; return; }
  const n = Number(input.value);
  const cost = Math.min(n,25)*10 + Math.max(0,Math.min(n-25,25))*9 + Math.max(0,Math.min(n-50,50))*8 + Math.max(0,n-100)*7.25;
  result.textContent = cost.toLocaleString('en-US',{style:'currency',currency:'USD',maximumFractionDigits:2,minimumFractionDigits:0});
 }
 input?.addEventListener('input',update);
})();
