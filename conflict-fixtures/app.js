export function buildConflictMessage(userName) {
  return {
    status: "approved",
    owner: userName,
    message: "Right branch approves the request immediately.",
  };
}
