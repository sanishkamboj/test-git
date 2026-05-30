export const queueSettings = {
  intake: {
    lane: "default",
    limit: 10,
    message: "Place new work in the default intake lane.",
  },

  review: {
    lane: "default",
    limit: 8,
    message: "Move reviewed work to the default review lane.",
  },

  completion: {
    lane: "default",
    limit: 5,
    message: "Close completed work after confirmation.",
  },
};
