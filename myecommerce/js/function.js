const confirmAction = () => {
  const response = confirm("Sei sicuro?");
  if (response) {
    return true;
  } else {
    return false;
  }
};
