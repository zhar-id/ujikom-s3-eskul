
  const dateInput = document.getElementById('tgl_lahir');   
  dateInput.addEventListener('change', function() {
    const selectedDate = new Date(this.value);
    const formattedDate = selectedDate.toLocaleDateString('en-US', { day: 'numeric', month: 'numeric', year: 'numeric' });
    this.value = formattedDate;
  });