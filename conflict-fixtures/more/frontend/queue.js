export const queueSettings = {
  intake: {
    lane: "right-intake",
    limit: 30,
    message: "Right branch expands intake for automated assignment.",
  },

  review: {
    lane: "right-review",
    limit: 20,
    message: "Right branch lets automation complete first-pass review.",
  },

  completion: {
    lane: "right-completion",
    limit: 12,
    message: "Right branch closes work after automated confidence checks.",
  },
};
