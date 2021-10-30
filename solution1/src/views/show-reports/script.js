const filterForm = document.getElementById("filter-form");
const timeReportsElement = document.getElementById("time-reports");
const workplaceSelectElement = filterForm.querySelector(
  "select[name='workplace']"
);
const fromDateElement = filterForm.querySelector("input[name='from_date']");
const toDateElement = filterForm.querySelector("input[name='to_date']");

async function getWorkPlaces() {
  try {
    const res = await fetch("api/workplaces");
    const workplaces = await res.json();
    return workplaces;
  } catch (error) {
    console.log(error);
    return [];
  }
}

async function getTimeReports() {
  try {
    const res = await fetch("api/reports");
    const timeReports = await res.json();
    return timeReports;
  } catch (error) {
    console.log(error);
    return [];
  }
}

function normalizeTimeReports(timeReports, workplaces) {
  return timeReports.map(({ date, hours, workplace_id }) => {
    const workplace = workplaces.filter(({ id }) => id === workplace_id)[0]
      .name;
    return {
      date,
      workplace,
      hours,
    };
  });
}

function updateTimeReportsTable(timeReports) {
  timeReportsElement.innerHTML = timeReports
    .map(
      ({ date, hours, workplace }) =>
        `<tr><td>${date}</td><td>${workplace}</td><td>${hours}</td></tr>`
    )
    .join("");
}

async function onPageLoad() {
  const workplaces = await getWorkPlaces();
  workplaceSelectElement.innerHTML += workplaces
    .map(({ id, name }) => `<option value="${id}">${name}</option>`)
    .join("");

  updateTimeReportsTable(
    normalizeTimeReports(await getTimeReports(), workplaces)
  );
  [workplaceSelectElement, fromDateElement, toDateElement].forEach((elem) => {
    elem.addEventListener("change", () => {
      const filerInputs = Array.from(filterForm.querySelectorAll("[name]"));
      const filterData = filerInputs
        .map((elem) => [elem.name, elem.value || undefined])
        .filter(([name, value]) => value !== undefined);
      console.log(filterData);
    });
  });
}

onPageLoad();
