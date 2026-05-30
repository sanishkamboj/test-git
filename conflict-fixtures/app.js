export function buildConflictMessage(userName) {
  return {
    status: "active",
    owner: userName,
    message: "Base response for merge conflict testing.",
  };
}
