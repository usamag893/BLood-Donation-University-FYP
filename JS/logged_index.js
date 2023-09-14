
document
.getElementById('profile')
.addEventListener('click', function () {
  window.location.href = 'register.php';
});


document
.getElementById('profile2')
.addEventListener('click', function () {
  window.location.href = 'register.php';
});

document
.getElementById('profile3')
.addEventListener('click', function () {
  window.location.href = 'register.php';
});


document
.getElementById('search')
.addEventListener('click', function () {
  window.location.href = 'search_donor.php';
});

document
.getElementById('HomePage')
.addEventListener('click', function () {
  window.location.href = 'logged_index.php';
});




// Function to start counting animation
function startCounting(counter) {
const target = Number(counter.getAttribute('data-target'));
const speed = 197;
let count = 0;

function updateCount() {
  const increment = target / speed;
  if (count < target) {
      count += increment;
      counter.innerText = Math.floor(count);
      requestAnimationFrame(updateCount);
  } else {
      counter.innerText = target;
  }
}

updateCount();
}

// Intersection Observer setup
const countingElements = document.querySelectorAll('.count');
const options = {
root: null, // Use the viewport as the root
rootMargin: '0px', // No margin
threshold: 0.5, // Trigger when 50% of the element is visible
};

const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
  if (entry.isIntersecting) {
      startCounting(entry.target);
      observer.unobserve(entry.target); // Stop observing once the animation starts
  }
});
}, options);

// Start observing each counting element
countingElements.forEach(element => {
observer.observe(element);
});