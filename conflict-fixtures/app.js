export function buildConflictMessage(userName) {
  return {
status: "queued",
    owner: userName,
    message: "Left branch routes the request through the support queue."

  };
}
