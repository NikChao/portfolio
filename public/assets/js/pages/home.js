// ============= Logic ================
function cardClick(cardEl) {
  setTimeout(() => {
    cardEl.parentElement.classList.add('full-screen-card');
    cardEl.classList.remove('space-card-actionable');
    cardEl.querySelector('.close-btn').style.display = 'flex';
    cardEl.querySelector('.categories').classList.remove('hidden');
  });
}

function closeModals() {
  document.querySelectorAll('.space-card').forEach(el => {
    el.parentElement.classList.remove('full-screen-card')
    el.classList.add('space-card-actionable');
    el.querySelector('.close-btn').style.display = 'none';
    el.querySelector('.categories').classList.add('hidden');
  });
}


// ============= Event listeners ================
document.querySelectorAll('.space-card').forEach(el => {
  el.addEventListener('click', function () {
    cardClick(el);
  });
})

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    closeModals();
  }
});

document.querySelectorAll('.close-btn').forEach(btn => {
  btn.addEventListener('click', function (e) {
    e.stopPropagation();
    closeModals();
  });
});
