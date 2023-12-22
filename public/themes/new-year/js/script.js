function calculateTimeRemaining(targetDate) {
  const now = new Date().getTime();
  const timeRemaining = targetDate - now;

  if (timeRemaining <= 0) {
    return { days: 0, hours: 0, minutes: 0, seconds: 0 };
  }

  const seconds = Math.floor((timeRemaining / 1000) % 60);
  const minutes = Math.floor((timeRemaining / 1000 / 60) % 60);
  const hours = Math.floor((timeRemaining / (1000 * 60 * 60)) % 24);
  const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));

  return { days, hours, minutes, seconds };
}

function updateCountdown() {
  const targetDate = new Date("2023-12-31T23:59:59").getTime();
  const countdown = calculateTimeRemaining(targetDate);
  /* Main Countdown */
  // Days
  const tozDays = document.getElementById("toz-days");
  if (tozDays) {
    tozDays.innerText = countdown.days;
  }
  // Hours
  const tozHours = document.getElementById("toz-hours");
  if (tozHours) {
    tozHours.innerText = countdown.hours;
  }
  // Minutes
  const tozMins = document.getElementById("toz-mins");
  if (tozMins) {
    tozMins.innerText = countdown.minutes;
  }
  // Seconds
  const tozSecs = document.getElementById("toz-secs");
  if (tozSecs) {
    tozSecs.innerText = countdown.seconds;
  }
}

const timerInterval = setInterval(updateCountdown, 1000);
