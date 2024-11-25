function toggleDropdown(dropdownId) {
    var dropdown = document.getElementById(dropdownId);
    var dropdownButton = document.getElementById(dropdownId + 'Wrapper').querySelector('.dropbtn');
    dropdown.classList.toggle("show");
    dropdownButton.classList.toggle("rotate-up");
    if (dropdown.classList.contains('show')) {
        // Add event listener to close dropdown when clicking outside
        document.addEventListener('click', closeDropdownOnClickOutside);
    } else {
        // Remove event listener when dropdown is hidden
        document.removeEventListener('click', closeDropdownOnClickOutside);
    }
}

function closeDropdownOnClickOutside(event) {
    var dropdowns = document.querySelectorAll('.dropdown-content.show');
    dropdowns.forEach(function(dropdown) {
        var dropdownWrapper = dropdown.parentNode;
        if (!dropdown.contains(event.target) && !dropdownWrapper.contains(event.target)) {
            dropdown.classList.remove('show');
            var dropdownButton = dropdownWrapper.querySelector('.dropbtn');
            dropdownButton.classList.remove('rotate-up');
        }
    });
}
// Jobs Filter dropdown functions
function resetJobFilter() {
    var checkboxes = document.querySelectorAll('#jobFilterDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('jobSearchInput').value = "";
    filterJobs(); // Reset filter also clears search results
}

function applyJobFilter() {
    // Implement your filtering logic here
    var selectedJobs = [];
    var checkboxes = document.querySelectorAll('#jobFilterDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedJobs.push(checkbox.id);
        }
    });
    console.log("Selected jobs:", selectedJobs);
    // You can further process the selected jobs, like sending them to server or updating UI
}

function toggleAllJobs() {
    var checkboxes = document.querySelectorAll('#jobFilterDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllJobs');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterJobs() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('jobSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#jobFilterDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Shift title dropdown functions
function resetShiftTitleFilter() {
    var checkboxes = document.querySelectorAll('#shiftTitleDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('shiftTitleSearchInput').value = "";
    filterShiftTitles(); // Reset filter also clears search results
}

function applyShiftTitleFilter() {
    // Implement your filtering logic here
    var selectedShiftTitles = [];
    var checkboxes = document.querySelectorAll('#shiftTitleDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedShiftTitles.push(checkbox.id);
        }
    });
    console.log("Selected shift titles:", selectedShiftTitles);
    // You can further process the selected shift titles, like sending them to server or updating UI
}

function toggleAllShifts() {
    var checkboxes = document.querySelectorAll('#shiftTitleDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllShifts');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterShiftTitles() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('shiftTitleSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#shiftTitleDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noShiftTitleDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Assign dropdown functions
function resetAssignmentFilter() {
    var checkboxes = document.querySelectorAll('#assignDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('assignmentSearchInput').value = "";
    filterAssignments(); // Reset filter also clears search results
}

function applyAssignmentFilter() {
    // Implement your filtering logic here
    var selectedAssignments = [];
    var checkboxes = document.querySelectorAll('#assignDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedAssignments.push(checkbox.id);
        }
    });
    console.log("Selected assignments:", selectedAssignments);
    // You can further process the selected assignments, like sending them to server or updating UI
}

function toggleAllAssignments() {
    var checkboxes = document.querySelectorAll('#assignDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllAssignments');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterAssignments() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('assignmentSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#assignDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noAssignmentDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Publish Draft dropdown functions
function resetPublishDraftFilter() {
    var checkboxes = document.querySelectorAll('#publishDraftDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('publishDraftSearchInput').value = "";
    filterPublishDraft(); // Reset filter also clears search results
}

function applyPublishDraftFilter() {
    // Implement your filtering logic here
    var selectedPublishDrafts = [];
    var checkboxes = document.querySelectorAll('#publishDraftDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedPublishDrafts.push(checkbox.id);
        }
    });
    console.log("Selected publish drafts:", selectedPublishDrafts);
    // You can further process the selected publish drafts, like sending them to server or updating UI
}

function toggleAllPublishDrafts() {
    var checkboxes = document.querySelectorAll('#publishDraftDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllPublishDrafts');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterPublishDraft() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('publishDraftSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#publishDraftDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noPublishDraftDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Status dropdown functions
function resetStatusFilter() {
    var checkboxes = document.querySelectorAll('#statusDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('statusSearchInput').value = "";
    filterStatus(); // Reset filter also clears search results
}

function applyStatusFilter() {
    // Implement your filtering logic here
    var selectedStatus = [];
    var checkboxes = document.querySelectorAll('#statusDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedStatus.push(checkbox.id);
        }
    });
    console.log("Selected status:", selectedStatus);
    // You can further process the selected status, like sending them to server or updating UI
}

function toggleAllStatus() {
    var checkboxes = document.querySelectorAll('#statusDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllStatus');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterStatus() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('statusSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#statusDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noStatusDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// group filter dropdown
// Group dropdown functions
function resetGroupFilter() {
    var checkboxes = document.querySelectorAll('#groupDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('groupSearchInput').value = "";
    filterGroup(); // Reset filter also clears search results
}

function applyGroupFilter() {
    // Implement your filtering logic here
    var selectedGroups = [];
    var checkboxes = document.querySelectorAll('#groupDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedGroups.push(checkbox.id);
        }
    });
    console.log("Selected groups:", selectedGroups);
    // You can further process the selected groups, like sending them to server or updating UI
}

function toggleAllGroups() {
    var checkboxes = document.querySelectorAll('#groupDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllGroups');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterGroup() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('groupSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#groupDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noGroupDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Qualified Users dropdown functions
function resetQualifiedUsersFilter() {
    var checkboxes = document.querySelectorAll(
        '#qualifiedUsersDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('qualifiedUsersSearchInput').value = "";
    filterQualifiedUsers(); // Reset filter also clears search results
}

function applyQualifiedUsersFilter() {
    // Implement your filtering logic here
    var selectedQualifiedUsers = [];
    var checkboxes = document.querySelectorAll(
        '#qualifiedUsersDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedQualifiedUsers.push(checkbox.id);
        }
    });
    console.log("Selected qualified users:", selectedQualifiedUsers);
    // You can further process the selected qualified users, like sending them to server or updating UI
}

function toggleAllQualifiedUsers() {
    var checkboxes = document.querySelectorAll(
        '#qualifiedUsersDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllQualifiedUsers');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterQualifiedUsers() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('qualifiedUsersSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#qualifiedUsersDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noQualifiedUsersDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// With Shift dropdown functions
function resetWithShiftFilter() {
    var checkboxes = document.querySelectorAll('#withShiftDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('withShiftSearchInput').value = "";
    filterWithShift(); // Reset filter also clears search results
}

function applyWithShiftFilter() {
    // Implement your filtering logic here
    var selectedWithShift = [];
    var checkboxes = document.querySelectorAll('#withShiftDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedWithShift.push(checkbox.id);
        }
    });
    console.log("Selected with shift:", selectedWithShift);
    // You can further process the selected with shift, like sending them to server or updating UI
}

function toggleAllWithShift() {
    var checkboxes = document.querySelectorAll('#withShiftDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllWithShift');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterWithShift() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('withShiftSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#withShiftDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noWithShiftDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}
// Available Users dropdown functions
function resetAvailableUsersFilter() {
    var checkboxes = document.querySelectorAll(
        '#availableUsersDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
        checkbox.parentNode.style.display = "";
    });
    document.getElementById('availableUsersSearchInput').value = "";
    filterAvailableUsers(); // Reset filter also clears search results
}

function applyAvailableUsersFilter() {
    // Implement your filtering logic here
    var selectedAvailableUsers = [];
    var checkboxes = document.querySelectorAll(
        '#availableUsersDropdown .dropfilter_options input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedAvailableUsers.push(checkbox.id);
        }
    });
    console.log("Selected available users:", selectedAvailableUsers);
    // You can further process the selected available users, like sending them to server or updating UI
}

function toggleAllAvailableUsers() {
    var checkboxes = document.querySelectorAll(
        '#availableUsersDropdown .dropfilter_options input[type="checkbox"]');
    var selectAllCheckbox = document.getElementById('selectAllAvailableUsers');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

function filterAvailableUsers() {
    var input, filter, div, inputElements, i, txtValue;
    input = document.getElementById('availableUsersSearchInput');
    filter = input.value.toUpperCase();
    div = document.querySelector('#availableUsersDropdown');
    inputElements = div.querySelectorAll('.dropfilter_options input[type="checkbox"]');
    var found = false;
    for (i = 0; i < inputElements.length; i++) {
        var element = inputElements[i];
        txtValue = element.parentNode.textContent || element.parentNode.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            element.parentNode.parentNode.style.display = "";
            found = true;
        } else {
            element.parentNode.parentNode.style.display = "none";
        }
    }
    var noDataMessage = document.getElementById('noAvailableUsersDataMessage');
    if (!found) {
        noDataMessage.style.display = "block";
    } else {
        noDataMessage.style.display = "none";
    }
}