// Fade in Effect
document.addEventListener("DOMContentLoaded", function () {
	console.log("Happy U Programming Competition - Site Loaded");

	// Select all elements with the fade-in class
	const fadeElements = document.querySelectorAll(".fade-in");

	// Function to handle the fade-in effect
	const handleFadeIn = (entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.classList.add("visible");
				observer.unobserve(entry.target); // Stop observing once it's in view
			}
		});
	};

	// Set up the Intersection Observer
	const observer = new IntersectionObserver(handleFadeIn, {
		root: null, // Use the viewport
		threshold: 0.1, // Trigger when 10% of the element is visible
	});

	// Observe each fade element
	fadeElements.forEach((element) => {
		observer.observe(element);
	});
});

// Set the date of the competition (October 25, 2024)
const competitionDate = new Date("October 25, 2024 00:00:00").getTime();

// Update the countdown every second
const countdown = setInterval(function () {
	const now = new Date().getTime(); // Get current time
	const timeLeft = competitionDate - now; // Calculate time left

	// Time calculations for days, hours, minutes, and seconds
	const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
	const hours = Math.floor(
		(timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
	);
	const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
	const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

	// Output the result in the respective elements
	document.getElementById("days").innerHTML = days;
	document.getElementById("hours").innerHTML = hours;
	document.getElementById("minutes").innerHTML = minutes;
	document.getElementById("seconds").innerHTML = seconds;

	// If the countdown is over, display a message
	if (timeLeft < 0) {
		clearInterval(countdown);
		document.getElementById("countdown").innerHTML =
			"The competition has started!";
	}
}, 1000); // Update every second (1000 milliseconds)

// Table of Content script
document.addEventListener("DOMContentLoaded", function () {
	const toc = document.getElementById("toc");
	const tocHoverArea = document.querySelector(".toc-hover-area");
	const headings = document.querySelectorAll("h2, h3"); // Adjust selectors as needed
	const tocList = toc.querySelector("ul"); // Get the UL element inside TOC

	headings.forEach((heading, index) => {
		const listItem = document.createElement("li");
		const anchor = document.createElement("a");

		const id = `toc-heading-${index}`; // Generate unique ID
		heading.id = id; // Set ID to heading for navigation

		anchor.href = `#${id}`; // Link to heading
		anchor.textContent = heading.textContent; // Heading text
		listItem.appendChild(anchor);
		tocList.appendChild(listItem);
	});

	// Show TOC on hover
	tocHoverArea.addEventListener("mouseenter", () => {
		toc.classList.add("visible"); // Add class to show TOC
	});

	// Hide TOC when not hovering
	tocHoverArea.addEventListener("mouseleave", () => {
		toc.classList.remove("visible"); // Remove class to hide TOC
	});

	// Keep TOC visible when mouse is over it
	toc.addEventListener("mouseenter", () => {
		toc.classList.add("visible"); // Keep TOC visible
	});

	// Hide TOC when mouse leaves the TOC itself
	toc.addEventListener("mouseleave", () => {
		toc.classList.remove("visible"); // Remove class to hide TOC
	});
});
