export const queueSettings = {
  intake: {
    lane: "left-intake",
    limit: 6,
    message: "Left branch throttles intake until an owner is assigned.",
  },

  review: {
    lane: "left-review",
    limit: 4,
    message: "Left branch requires peer review before completion.",
  },

  completion: {
    lane: "left-completion",
    limit: 2,
    message: "Left branch keeps completion narrow for manual QA.",
  },
};
